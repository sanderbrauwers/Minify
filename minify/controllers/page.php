<?php
class Page extends Controller {
	function __construct(){
		parent::__construct();
		Auth::handleLogin();
	}
    
	function index(){
		$this->view->pageTitle = 'Pages';
		$this->view->pageList = $this->model->pageList();
						

		$this->view->render('page/index');

	}
	
	function add(){
		$this->view->pageTitle = 'Add Pages';
								

		$this->view->render('page/add');

	}
	
	function edit($pageid){		
		$this->view->pageTitle = 'Edit page';
		$this->view->pageSingleList = $this->model->pageSingleList($pageid);
		 

		$this->view->render('page/edit');
	}
	
	public function editSave($pageid){	
		$data = array(
			'pageid' => $pageid,
			'title' => $_POST['title'],
			'title_alias' => $_POST['title_alias'],
			'content' => $_POST['content']
		);
        
		// @TODO: Do your error checking!    
		$this->model->editSave($data);
		header('location: ' . URL . 'page');
	}

	public function save($pageid){	
		$data = array(
			'pageid' => $pageid,
			'title' => $_POST['title'],
			'title_alias' => $_POST['title_alias'],
			'content' => $_POST['content']
		);
        
		// @TODO: Do your error checking!    
		$this->model->save($data);
		header('location: ' . URL . 'page');
	}
	
	public function create() {
		
		$data = $_POST;
		$data['add_date'] = date('Y-m-d H:i:s');
	
		// @TODO: Do your error checking!    
		$this->model->create($data);
		header('location: ' . URL . 'page');
	}
	public function delete($id){
		$this->model->delete($id);
		header('location: ' . URL . 'page');
	}
}