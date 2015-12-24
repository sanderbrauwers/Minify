<?php
class Image extends Controller {
	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
    
	public function index(){  
		$this->view->title = 'Images';
		$this->view->pageTitle = 'Pictures';
		$this->view->imageList = $this->model->imageList();


		$this->view->render('image/index');

	}
	
	public function run(){  
		//$token = new Token;
		//$this->model->token = $token->getToken();
		$this->model->run();
		//header('location: ' . URL . 'image');
		$this->view->title = 'Images';
		$this->view->pageTitle = 'Pictures';

		header('location: ' . URL . 'image');
	}
	
	public function delete($imageid){  
		$this->model->delete($imageid);
		header('location: ' . URL . 'image');
	}   
}
?>