<?php

class Home extends Controller {

	function __construct() {
		parent::__construct();
		// echo 'We are in index';
		// $this->view->render('home');
	}
	public function index(){
		$this->view->render('home');
	} 

}