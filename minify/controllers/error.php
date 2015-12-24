<?php
class Error extends Controller {
	function __construct() {
		parent::__construct();
		//Auth::handleLogin();
	}
    
	function index($msg = 'There isn&prime;t a page here', $headmsg = '404') {
		$this->view->title = 'Error';
		$this->view->headmsg = $headmsg;
		$this->view->msg = $msg;
		
		$this->view->render('error/header', true);
		$this->view->render('error/index', true);
		$this->view->render('error/footer', true);
	}
}