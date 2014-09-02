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

	public function whyvote(){
		$this->view->render('whyvote');
	} 

	public function changeavatar(){
		$this->view->render('changeavatar');
	} 

	public function download(){
		$this->view->render('download');
	} 

	public function organize(){
		$this->view->render('organize');
	} 

}