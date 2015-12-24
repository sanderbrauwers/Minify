<?php
class User extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
		$this->view->js = array('user/js/default.js');
	}
    
	public function index(){  
		$this->view->title = 'Users';
		$this->view->pageTitle = 'Users';
		$this->view->userList = $this->model->userList();
		
		$this->view->render('user/index');
	}
	
	public function add(){  
		$this->view->title = 'Create user';
		$this->view->pageTitle = 'Create new user';
	
		$this->view->render('user/add');
	}
	
	public function create() {
		if (isset($_REQUEST)){	  
		  try {
		    $form = new Form();
		    $form->post('username')
		          ->val('minlength', 3)
				      ->post('password')
		          ->val('minlength', 5)
				      ->post('gender')
				      ->val('char')
				      ->post('email')
				      ->post('role')
				      ->post('birth_year')
				      ->post('birth_month')
				      ->post('birth_day');

		    $form->submit();
 
		    $data = $form->fetch();	  
		    $data['birth'] = $data['birth_year'] . '-' . $data['birth_month'] .'-'. $data['birth_day'];
		    
		    $this->model->create($data);
		    header('location: ' . URL . 'user');
		      
		  } catch (Exception $e) {
		    $this->view->formval = $form->_error;
		    $this->add();
		  }
		}
	}
	
	public function edit($id) {
		$this->view->title = 'Edit user';
		$this->view->pageTitle = 'Edit user';
		$this->view->user = $this->model->userSingleList($id);
	
		$this->view->render('user/edit');
	}

	public function search($id) {
		$this->view->title = 'Profile';
		$this->view->pageTitle = 'Profile';
		$this->view->user = $this->model->userSingleList($id);
	
		$this->view->render('user/search');
	}
	
	public function editSave($id){
		$data = array();
		$data['id'] = $id;	
		$data['password'] = $_POST['password'];
		$data['role'] = $_POST['role'];
		$data['name'] = $_POST['name'];
		$data['gender'] = $_POST['gender'];
		$data['email'] = $_POST['email'];
		$data['birth'] = $_POST['birth_year'] . '-' . $_POST['birth_month'] .'-'. $_POST['birth_day'];
				 
		// @TODO: Do your error checking!
		$this->model->editSave($data);
		header('location: ' . URL . 'user');
	}
	
	public function delete($id){
		$this->model->delete($id);
		header('location: ' . URL . 'user');
	}
}