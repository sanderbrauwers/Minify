<?php
class Blog extends Controller {
	function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
    
	function index() {
		$this->view->pageTitle = 'Blog Center';
		$this->view->blogList = $this->model->blogList();					
		$this->view->render('blog/index');
	}
	
	function add() {
		$this->view->pageTitle = 'Add post';								
		$this->view->render('blog/add');
	}
	
	function edit($blogid){			
		$this->view->pageTitle = 'Edit post';
		$this->view->blogSingleList = $this->model->blogSingleList($blogid);
		 
		$this->view->render('blog/edit');
	}
	
	public function save($blogid){	
		$data = array(
			'blogid' => $blogid,
			'title' => $_POST['title'],
			'content' => $_POST['content']
		);
     
		// @TODO: Do your error checking!  
		$this->model->save($data);
		header('location: ' . URL . 'blog');
	}
	
	public function create() {
		
		$data = $_POST;
		$data['userid'] = Session::get('userid');
		$data['add_date'] = date('Y-m-d H:i:s');

		// @TODO: Do your error checking!       
		$this->model->create($data);
		header('location: ' . URL . 'blog');
	}
}