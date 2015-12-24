<?php
class Setting extends Controller {
	function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
    
	function index() {

		$this->view->pageTitle = 'General Settings';
		$this->view->modulesList = $this->model->modulesList();
		$this->view->logList = $this->model->logList();
		$this->view->logUsers = $this->model->logUsers();
		
		$this->view->render('setting/index');
	}   
	public function editSave(){

		$data = $_POST;
		// @TODO: Do your error checking!
		$this->model->editSave($data);
		/*
		header('location: ' . URL . 'user');*/
	}
}