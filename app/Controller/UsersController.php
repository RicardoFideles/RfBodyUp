<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {
	
	
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
	 
	 public function login() {

       if ($this->request->is('post')) {
       	
            if ($this->Auth->login()) {
                return $this->redirect('/');
            } else {
                $this->Session->setFlash('Dados incorretos ...');
            }
        }
    }
	 
	 public function dashboard() {
	 	
	 }
	 
	 public function logout() {
        $this->Session->delete($this->Auth->sessionKey);

        $this->redirect($this->Auth->logout());
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
	public function admin_index() {
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
	
	/**
	 * It is used to create backup of log file
	 *
	 * @access public
	 * @return array
	 */
	public function admin_cakelogbackup($filename = null) {
		if (isset($_SERVER['HTTP_REFERER'])) {
			if(!empty($filename)) {
				$filepath= LOGS.$filename;
				if(file_exists($filepath)) {
					$pathinfo = pathinfo($filepath);
					$newfile= $pathinfo['filename'].'_'.date('d-M-Y_H-i', time()).'.'.$pathinfo['extension'];
					copy($filepath, LOGS.$newfile);
					$this->Session->setFlash($filename.__(' has been copied to ').$newfile);
				} else {
					$this->Session->setFlash($filename.__(' file does not exist.'), 'default', array('class' => 'warning'));
				}
			} else {
				$this->Session->setFlash(__('Missing Filename'), 'default', array('class' => 'warning'));
			}
		}
		$this->redirect(array('action'=>'cakelog'));
	}
	/**
	 * It is used to delete log file
	 *
	 * @access public
	 * @return array
	 */
	public function admin_cakelogdelete($filename = null) {
		if (isset($_SERVER['HTTP_REFERER'])) {
			if(!empty($filename)) {
				$filepath= LOGS.$filename;
				if(file_exists($filepath)) {
					if(unlink($filepath)) {
						$this->Session->setFlash($filename.__(' has been deleted'));
					} else {
						$this->Session->setFlash($filename.__(' file could not be deleted'), 'default', array('class' => 'warning'));
					}
				} else {
					$this->Session->setFlash($filename.__(' file does not exist.'), 'default', array('class' => 'warning'));
				}
			} else {
				$this->Session->setFlash(__('Missing Filename'), 'default', array('class' => 'warning'));
			}
		}
		$this->redirect(array('action'=>'cakelog'));
	}
	/**
	 * It is used to empty log file
	 *
	 * @access public
	 * @return array
	 */
	public function admin_cakelogempty($filename = null) {
		if (isset($_SERVER['HTTP_REFERER'])) {
			if(!empty($filename)) {
				$filepath= LOGS.$filename;
				$f = @fopen($filepath, "r+");
				if ($f !== false) {
					ftruncate($f, 0);
					fclose($f);
					$this->Session->setFlash($filename.__(' has been done empty'));
				} else {
					$this->Session->setFlash($filename.__(' file does not exist.'), 'default', array('class' => 'warning'));
				}
			} else {
				$this->Session->setFlash(__('Missing Filename'), 'default', array('class' => 'warning'));
			}
		}
		$this->redirect(array('action'=>'cakelog'));
	}
	
	public function admin_addimage() {
		
        if ($this->request->is('post')) {
            try {
                $this->User->createWithAttachments($this->request->data);
                $this->Session->setFlash(__('The message has been saved'));
            } catch (Exception $e) {
                $this->Session->setFlash($e->getMessage());
            }
        }
    }


}
