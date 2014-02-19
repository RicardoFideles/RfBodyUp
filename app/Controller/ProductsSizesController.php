<?php
App::uses('AppController', 'Controller');
/**
 * ProductsSizes Controller
 *
 * @property ProductsSize $ProductsSize
 * @property PaginatorComponent $Paginator
 */
class ProductsSizesController extends AppController {

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
	public function index() {
		$this->ProductsSize->recursive = 0;
		$this->set('productsSizes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ProductsSize->exists($id)) {
			throw new NotFoundException(__('Invalid products size'));
		}
		$options = array('conditions' => array('ProductsSize.' . $this->ProductsSize->primaryKey => $id));
		$this->set('productsSize', $this->ProductsSize->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ProductsSize->create();
			if ($this->ProductsSize->save($this->request->data)) {
				$this->Session->setFlash(__('The products size has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The products size could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductsSize->Product->find('list');
		$sizes = $this->ProductsSize->Size->find('list');
		$this->set(compact('products', 'sizes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ProductsSize->exists($id)) {
			throw new NotFoundException(__('Invalid products size'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductsSize->save($this->request->data)) {
				$this->Session->setFlash(__('The products size has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The products size could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductsSize.' . $this->ProductsSize->primaryKey => $id));
			$this->request->data = $this->ProductsSize->find('first', $options);
		}
		$products = $this->ProductsSize->Product->find('list');
		$sizes = $this->ProductsSize->Size->find('list');
		$this->set(compact('products', 'sizes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ProductsSize->id = $id;
		if (!$this->ProductsSize->exists()) {
			throw new NotFoundException(__('Invalid products size'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProductsSize->delete()) {
			$this->Session->setFlash(__('The products size has been deleted.'));
		} else {
			$this->Session->setFlash(__('The products size could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
