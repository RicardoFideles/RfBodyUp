<?php
App::uses('AppController', 'Controller');
/**
 * Colors Controller
 *
 * @property Color $Color
 * @property PaginatorComponent $Paginator
 */
class ColorsController extends AppController {

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
		$this->Color->recursive = 0;
		$this->set('colors', $this->Paginator->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Color->create();
			if ($this->Color->save($this->request->data)) {
				$this->Session->setFlash(__('The color has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The color could not be saved. Please, try again.'));
			}
		}
		$products = $this->Color->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Color->exists($id)) {
			throw new NotFoundException(__('Invalid color'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Color->save($this->request->data)) {
				$this->Session->setFlash(__('The color has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The color could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Color.' . $this->Color->primaryKey => $id));
			$this->request->data = $this->Color->find('first', $options);
		}
		$products = $this->Color->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Color->id = $id;
		if (!$this->Color->exists()) {
			throw new NotFoundException(__('Invalid color'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Color->delete()) {
			$this->Session->setFlash(__('The color has been deleted.'));
		} else {
			$this->Session->setFlash(__('The color could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
