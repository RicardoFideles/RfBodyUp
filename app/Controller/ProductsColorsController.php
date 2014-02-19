<?php
App::uses('AppController', 'Controller');
/**
 * ProductsColors Controller
 *
 * @property ProductsColor $ProductsColor
 * @property PaginatorComponent $Paginator
 */
class ProductsColorsController extends AppController {

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
		$this->ProductsColor->recursive = 0;
		$this->set('productsColors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ProductsColor->exists($id)) {
			throw new NotFoundException(__('Invalid products color'));
		}
		$options = array('conditions' => array('ProductsColor.' . $this->ProductsColor->primaryKey => $id));
		$this->set('productsColor', $this->ProductsColor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ProductsColor->create();
			if ($this->ProductsColor->save($this->request->data)) {
				$this->Session->setFlash(__('The products color has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The products color could not be saved. Please, try again.'));
			}
		}
		$products = $this->ProductsColor->Product->find('list');
		$colors = $this->ProductsColor->Color->find('list');
		$this->set(compact('products', 'colors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ProductsColor->exists($id)) {
			throw new NotFoundException(__('Invalid products color'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ProductsColor->save($this->request->data)) {
				$this->Session->setFlash(__('The products color has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The products color could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ProductsColor.' . $this->ProductsColor->primaryKey => $id));
			$this->request->data = $this->ProductsColor->find('first', $options);
		}
		$products = $this->ProductsColor->Product->find('list');
		$colors = $this->ProductsColor->Color->find('list');
		$this->set(compact('products', 'colors'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ProductsColor->id = $id;
		if (!$this->ProductsColor->exists()) {
			throw new NotFoundException(__('Invalid products color'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ProductsColor->delete()) {
			$this->Session->setFlash(__('The products color has been deleted.'));
		} else {
			$this->Session->setFlash(__('The products color could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
