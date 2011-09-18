<?php

class AppController extends Controller {

    public $components = array(
	'Session',
    );
    public $helpers = array(
	'Session',
	'Html',
	'Form',
	'Topping.Javascript',
	'Topping.Ajax',
    );

}
