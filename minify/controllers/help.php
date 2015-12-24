<?php

class Help extends Controller {
	function __construct() {
		parent::__construct();
		Auth::handleLogin();
    }
    
	function index() {
		$this->view->pageTitle = 'Frequently Asked Questions';

		$this->view->render('help/index');

	}   
}