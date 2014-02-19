<?php
App::uses('AppController', 'Controller');
/**
 * DoubtsTopics Controller
 *
 * @property DoubtsTopic $DoubtsTopic
 * @property PaginatorComponent $Paginator
 */
class DoubtsTopicsController extends AppController {

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
		$this->DoubtsTopic->recursive = 0;
		$this->set('doubtsTopics', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DoubtsTopic->exists($id)) {
			throw new NotFoundException(__('Invalid doubts topic'));
		}
		$options = array('conditions' => array('DoubtsTopic.' . $this->DoubtsTopic->primaryKey => $id));
		$this->set('doubtsTopic', $this->DoubtsTopic->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DoubtsTopic->create();
			if ($this->DoubtsTopic->save($this->request->data)) {
				$this->Session->setFlash(__('The doubts topic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doubts topic could not be saved. Please, try again.'));
			}
		}
		$doubts = $this->DoubtsTopic->Doubt->find('list');
		$topics = $this->DoubtsTopic->Topic->find('list');
		$this->set(compact('doubts', 'topics'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DoubtsTopic->exists($id)) {
			throw new NotFoundException(__('Invalid doubts topic'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DoubtsTopic->save($this->request->data)) {
				$this->Session->setFlash(__('The doubts topic has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doubts topic could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DoubtsTopic.' . $this->DoubtsTopic->primaryKey => $id));
			$this->request->data = $this->DoubtsTopic->find('first', $options);
		}
		$doubts = $this->DoubtsTopic->Doubt->find('list');
		$topics = $this->DoubtsTopic->Topic->find('list');
		$this->set(compact('doubts', 'topics'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DoubtsTopic->id = $id;
		if (!$this->DoubtsTopic->exists()) {
			throw new NotFoundException(__('Invalid doubts topic'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DoubtsTopic->delete()) {
			$this->Session->setFlash(__('The doubts topic has been deleted.'));
		} else {
			$this->Session->setFlash(__('The doubts topic could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
