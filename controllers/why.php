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

	public function myvotemetters(){
		$this->view->render('myvotemetters');
	} 

	public function whovote(){
		$this->view->render('whovote');
	} 

	public function myfriends(){
		$this->view->render('myfriends');
	} 

	public function noaddress(){
		$this->view->render('noaddress');
	} 

	public function foreignvote(){
		$this->view->render('foreignvote');
	} 

}