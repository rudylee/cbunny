<?php

class UsersController extends AppController {

    var $name = 'Users';

    function index() {
	$this->User->recursive = 0;
	$this->set('users', $this->paginate());
    }

    function view($id = null) {
	if (!$id) {
	    $this->Session->setFlash(__('Invalid user', true));
	    $this->redirect(array('action' => 'index'));
	}
	$this->set('user', $this->User->read(null, $id));
    }
    
    function autoComplete() {
	$this->autoRender = false;
	$users = $this->User->find('all', array(
	    'conditions' => array(
		'User.username LIKE' => '%' . $_GET['term'] . '%',
		)));
	echo json_encode($this->_encode($users));
    }
    
    function index_redirect() {
	$this->User->recursive = 0;
	$this->set('users', $this->paginate());
    }
    
    function autoComplete_redirect() {
	if (!empty($this->data)) {
	    $this->redirect(array(
		'controller' => 'users',
		'action' => 'view', $this->data['User']['id']
	    ));
	}
	$this->autoRender = false;
	$users = $this->User->find('all', array(
	    'conditions' => array(
		'User.username LIKE' => '%' . $_GET['term'] . '%',
		)));
	echo json_encode($this->_encode($users));
    }
    
    function _encode($postData) {
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
