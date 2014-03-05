<?php
App::uses('AppController', 'Controller');
/**
 * Photos Controller
 *
 * @property Photo $Photo
 * @property PaginatorComponent $Paginator
 */
class PhotosController extends AppController {

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
		$this->Photo->recursive = 0;
		$this->set('photos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view_product($id = null) {
		if (!$this->Photo->exists($id)) {
			throw new NotFoundException(__('Invalid photo'));
		}
		$options = array('conditions' => array('Photo.' . $this->Photo->primaryKey => $id));
		$this->set('photo', $this->Photo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add_product($id = null) {
		if ($this->request->is('post')) {
			$this->Photo->create();
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('The photo has been saved.'));
				$this->redirect(array('controller' =>'products','action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('Não foi possível salvar a foto. Por favor tente novamente.'));
			}
		}
		$products = $this->Photo->Product->find('list', array ('conditions' => array('Product.id' => $id)));
		$this->set(compact('products'));
	}
	
	public function admin_add_category($id = null) {
		if ($this->request->is('post')) {
			$this->Photo->create();
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('The photo has been saved.'));
				$this->redirect(array('controller' =>'categories','action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('Não foi possível salvar a foto. Por favor tente novamente.'));
			}
		}
		$categories = $this->Photo->Category->find('list', array ('conditions' => array('Category.id' => $id)));
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit_product($id = null, $idModel = null) {
		if (!$this->Photo->exists($id)) {
			throw new NotFoundException(__('Invalid photo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('The photo has been saved.'));
				$this->redirect(array('controller' =>'products','action' => 'view', $idModel));
			} else {
				$this->Session->setFlash(__('Não foi possível salvar a foto. Por favor tente novamente.'));
			}
		} else {
			$options = array('conditions' => array('Photo.' . $this->Photo->primaryKey => $id));
			$this->request->data = $this->Photo->find('first', $options);
		}
		$products = $this->Photo->Product->find('list', array ('conditions' => array('Product.id' => $idModel)));
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete_product($id = null, $idModel = null) {
		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Invalid photo'));
		}
		//$this->request->onlyAllow('post', 'delete');
		if ($this->Photo->delete()) {
			$this->Session->setFlash(__('The photo has been deleted.'));
			$this->redirect(array('controller' =>'products','action' => 'view', $idModel));
		} else {
			$this->Session->setFlash(__('The photo could not be deleted. Please, try again.'));
		}
		$this->redirect(array('controller' =>'products','action' => 'view', $idModel));
	}
	
	public function admin_delete_category($id = null, $idModel = null) {
		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Invalid photo'));
		}
		//$this->request->onlyAllow('post', 'delete');
		if ($this->Photo->delete()) {
			$this->Session->setFlash(__('The photo has been deleted.'));
			$this->redirect(array('controller' =>'categories','action' => 'view', $idModel));
		} else {
			$this->Session->setFlash(__('The photo could not be deleted. Please, try again.'));
		}
		$this->redirect(array('controller' =>'categories','action' => 'view', $idModel));
	}
}
