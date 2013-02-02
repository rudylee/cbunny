<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

    var $components = array('RequestHandler');

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

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

    public function select2() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function search() {
        // get the search term from URL
        $term = $this->request->query['q'];
        $users = $this->User->find('all',array(
            'conditions' => array(
                'User.username LIKE' => '%'.$term.'%'
            )
        ));

        // Format the result for select2
        $result = array();
        foreach($users as $key => $user) {
            $result[$key]['id'] = (int) $user['User']['id'];
            $result[$key]['text'] = $user['User']['username'];
        }
        $users = $result;
        
        $this->set(compact('users'));
    }

}
