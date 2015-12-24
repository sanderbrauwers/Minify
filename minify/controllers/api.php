<?php
class Api extends Controller {
	function __construct() {
		parent::__construct();
	}
    
	function index() {
		$this->view->pageTitle = 'Api';
						
		$this->view->render('api/index');
	}

	function blog($id = null){

		if($id === null){
			$this->view->blogList = $this->model->blogList();
		}else{
			$this->view->singleBlog = $this->model->singleBlog($id);
		}
		$this->view->render('api/blog', true);

		
	}
	function page($id = null){

		if($id === null){
			$this->view->pageList = $this->model->pageList();
		}else{
			$this->view->pageList = $this->model->singlePage($id);
		}	
		$this->view->render('api/page', true);
	}
}