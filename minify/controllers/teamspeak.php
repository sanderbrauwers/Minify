<?php
class Teamspeak extends Controller {
	function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
    
	function index() {
		$this->view->pageTitle = 'Teamspeak Center';
		//$this->view->blogList = $this->model->blogList();					
		$this->view->render('teamspeak/index');
	}

  public function restart(){
    $this->model->restart();

    header('location: ' . URL . 'teamspeak');
  }
	
}