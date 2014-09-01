<?php

class Why extends Controller {

	function __construct() {
		parent::__construct();
		// echo 'We are in WHY';
		// $this->view->render('why');
	}

	public function index(){
		$this->view->render('why');
	} 

}