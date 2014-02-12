<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {
	
	
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }
	
	
	 public function admin_login() {
        $this->layout = 'login';

        if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            return $this->redirect($this->Auth->redirectUrl());
	        } else {
	            $this->Session->setFlash(
	                __('Dados inválidos'),
	                'alerts/inline',
	                array(),
	                'auth'
	            );
	        }
	    }

        $this->set(array(
            'title_for_layout' => 'Painel de Controle'
        ));
    }
	
	/**
     * Dashboard do painel de controle
     */
    public function admin_dashboard() {
		
    	$this->set(array(
            'title_for_layout' => 'Painel de Controle'
        ));
	}
	
    
    /**
     * Logout de usuários (admin)
     */
    public function admin_logout() {
        $this->Session->delete($this->Auth->sessionKey);

        $this->redirect($this->Auth->logout());
    }

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
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function admin_cakelog($filename = null) {
		$fullpath= LOGS;
		$logFiles = glob($fullpath."*.log");
		$this->set(compact('logFiles', 'filename'));
		if($this->request->isPost()) {
			$fp = fopen($fullpath.$filename, "w");
			fwrite($fp, $this->request->data['UserSetting']['logfile']);
			fclose($fp);
			$this->Session->setFlash($filename.__(' has been modified successfully'));
			$this->redirect(array('action'=>'cakelog'));
		}
	}


}
