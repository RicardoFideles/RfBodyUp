<?php
App::uses('AppController', 'Controller');
/**
 * Doubts Controller
 *
 * @property Doubt $Doubt
 * @property PaginatorComponent $Paginator
 */
class DoubtsController extends AppController {

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
		$this->Doubt->recursive = 0;
		$this->set('doubts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Doubt->exists($id)) {
			throw new NotFoundException(__('Invalid doubt'));
		}
		$options = array('conditions' => array('Doubt.' . $this->Doubt->primaryKey => $id));
		$this->set('doubt', $this->Doubt->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Doubt->create();
			if ($this->Doubt->save($this->request->data)) {
				$this->Session->setFlash(__('The doubt has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doubt could not be saved. Please, try again.'));
			}
		}
		$topics = $this->Doubt->Topic->find('list');
		$this->set(compact('topics'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Doubt->exists($id)) {
			throw new NotFoundException(__('Invalid doubt'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Doubt->save($this->request->data)) {
				$this->Session->setFlash(__('The doubt has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doubt could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Doubt.' . $this->Doubt->primaryKey => $id));
			$this->request->data = $this->Doubt->find('first', $options);
		}
		$topics = $this->Doubt->Topic->find('list');
		$this->set(compact('topics'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Doubt->id = $id;
		if (!$this->Doubt->exists()) {
			throw new NotFoundException(__('Invalid doubt'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Doubt->delete()) {
			$this->Session->setFlash(__('The doubt has been deleted.'));
		} else {
			$this->Session->setFlash(__('The doubt could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
