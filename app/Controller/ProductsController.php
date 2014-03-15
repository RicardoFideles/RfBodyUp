<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
		$this->set('product', $this->Product->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Product->create();
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Product->Category->find('list');
		$parentProducts = $this->Product->ParentProduct->find('list');
		$colors = $this->Product->Color->find('list');
		$sizes = $this->Product->Size->find('list');
		$transactions = $this->Product->Transaction->find('list');
		$this->set(compact('categories', 'parentProducts', 'colors', 'sizes', 'transactions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
			$this->request->data = $this->Product->find('first', $options);
		}
		$categories = $this->Product->Category->find('list');
		$parentProducts = $this->Product->ParentProduct->find('list');
		$colors = $this->Product->Color->find('list');
		$sizes = $this->Product->Size->find('list');
		$transactions = $this->Product->Transaction->find('list');
		$this->set(compact('categories', 'parentProducts', 'colors', 'sizes', 'transactions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Product->delete()) {
			$this->Session->setFlash(__('The product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function lista ($categoria = null, $page = null, $quantidade = null) {
		
		$this->loadModel('Category');
		
		$catTemp = $this->Category->findBySlug($categoria);
		
		if ($catTemp != null && !empty($catTemp) && ($catTemp['Category']['id'] != null)) {
			
			$idCategoria = $catTemp['Category']['id'];
			
			$disponibilidade = "Product.disponibilidade";
			
			$category = $catTemp;
			
			$idioma = Configure::read('lang');
			
			if ($quantidade == null) {
				$quantidade = 8;
			} else {
				if ($quantidade == 2) {
					$quantidade = 16;
				} else {
					if ($quantidade == 3) {
						$quantidade = 1000;
					} else {
						$quantidade = 8;
					}
				}
			}
			
			
			
			if ($idioma == "en") {
					
				$this->paginate = array('limit' => $quantidade , 'page' => $page, 'conditions' =>  array('Product.category_id' => $idCategoria, "Product.disponibilidade_en" => "sim_"));
			} else {
				$this->paginate = array('limit' => $quantidade , 'page' => $page, 'conditions' =>  array('Product.category_id' => $idCategoria, "Product.disponibilidade" => "sim"));
			}
			
		
			$products = $this->paginate();
		
			$this -> set(compact('products', 'category'));
			
			
		} else {
			return $this->redirect('/');
		}
		
	}

	public function destaque () {
		return $this->Product->find('all', array('conditions' => array('Product.destaque' => 'sim__'), 'limit' => 4));
	}

	public function view($id = null) {

		preg_match('/(?:.*?)\-([0-9]+)\.html$/', $id, $matches);

		$id = $matches[1];

		$this -> Product -> id = $id;
		if (!$this -> Product -> exists()) {
			throw new NotFoundException(__('Produto inexistente'));
		}
		
		$this->Product->recursive = 2;

		$product = $this -> Product -> read(null, $id);
		
		
		$this->loadModel('Category');
		
		$category = $this->Category->findById($product['Product']['category_id']);
		
		$this -> set(compact('product','category' ));
	}
	
	public function destaque_home () {
		return $this->Product->find('all', array('conditions' => array('Product.destaque' => 'sim__'), 'limit' => 4));
	}


}
