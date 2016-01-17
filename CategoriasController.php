<?php
App::uses('AppController', 'Controller');

class CategoriasController extends AppController {


///////////////////////////////////////////////////////////
	

	public $components = array('Paginator');


///////////////////////////////////////////////////////////


	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow(array('menu', 'ver'));
	}



} //end
