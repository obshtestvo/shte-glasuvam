<?php

class Campaign extends Controller {

	function __construct() {
		parent::__construct();
		// echo 'We are in index';
		// $this->view->render('campaign');
	}
	public function index(){
		$this->view->render('campaign');
	} 
}