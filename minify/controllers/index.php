<?php
class Index extends Controller {
	function __construct() {
		parent::__construct();
		Auth::handleLogin();

	}
    
	function index() {

		$this->view->pageTitle = 'Dashboard';

		$this->view->render('index/index');

	}   
}