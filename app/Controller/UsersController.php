<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
	$this->User->recursive = 0;
	$this->set('users', $this->paginate());
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
	$this->User->id = $id;
	if (!$this->User->exists()) {
	    throw new NotFoundException(__('Invalid user'));
	}
	$this->set('user', $this->User->read(null, $id));
    }
    
    public function autoComplete() {
	$this->autoRender = false;
	$users = $this->User->find('all', array(
	    'conditions' => array(
		'User.username LIKE' => '%' . $_GET['term'] . '%',
		)));
	echo json_encode($this->_encode($users));
    }
    
    private function _encode($postData) {
	$temp = array();
	foreach ($postData as $user) {
	    array_push($temp, array(
		'id' => $user['User']['id'],
		'label' => $user['User']['username'],
		'value' => $user['User']['username'],
	    ));
	}
	return $temp;
    }
    

}
