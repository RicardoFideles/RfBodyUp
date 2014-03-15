<?php
App::uses('AppController', 'Controller');
/**
 * TransactionsProducts Controller
 *
 * @property TransactionsProduct $TransactionsProduct
 * @property PaginatorComponent $Paginator
 */
class TransactionsProductsController extends AppController {

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
		$this->TransactionsProduct->recursive = 0;
		$this->set('transactionsProducts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TransactionsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid transactions product'));
		}
		$options = array('conditions' => array('TransactionsProduct.' . $this->TransactionsProduct->primaryKey => $id));
		$this->set('transactionsProduct', $this->TransactionsProduct->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TransactionsProduct->create();
			if ($this->TransactionsProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The transactions product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transactions product could not be saved. Please, try again.'));
			}
		}
		$transactions = $this->TransactionsProduct->Transaction->find('list');
		$products = $this->TransactionsProduct->Product->find('list');
		$this->set(compact('transactions', 'products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TransactionsProduct->exists($id)) {
			throw new NotFoundException(__('Invalid transactions product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TransactionsProduct->save($this->request->data)) {
				$this->Session->setFlash(__('The transactions product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transactions product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TransactionsProduct.' . $this->TransactionsProduct->primaryKey => $id));
			$this->request->data = $this->TransactionsProduct->find('first', $options);
		}
		$transactions = $this->TransactionsProduct->Transaction->find('list');
		$products = $this->TransactionsProduct->Product->find('list');
		$this->set(compact('transactions', 'products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TransactionsProduct->id = $id;
		if (!$this->TransactionsProduct->exists()) {
			throw new NotFoundException(__('Invalid transactions product'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TransactionsProduct->delete()) {
			$this->Session->setFlash(__('The transactions product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The transactions product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
