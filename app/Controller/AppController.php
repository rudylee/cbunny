<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {
    
    var $helpers = array(
	'Session',
	'Html',
	'Form',
	'Javascript',
	'Ajax'
    );
}
