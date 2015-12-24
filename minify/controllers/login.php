<?php
class Login extends Controller {
	function __construct() {
		parent::__construct();  
	}
    
	function index(){   
		$this->view->title = 'Login'; 

		$this->view->render('login/header', true);
 		$this->view->render('login/index', true);
		$this->view->render('login/footer', true);

	}
    
	function run(){
		$this->model->run();
	}
	
	function logOut(){
		$this->model->logout();
	}
}