<?php
class Model {

	public $name;

	function __construct(){

		//Get current pagename/classname
		$this->name = strtolower(substr(get_class($this), 0, -6));

		try{     
		    $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
		}catch (PDOException $e){
		  
		  $this->view->headmsg = 'Oh snap!';
		  $this->view->msg = 'Error establishing a database connection';
			$this->view->render('error/header');
			$this->view->render('error/index');
			$this->view->render('error/footer');
			exit();  
		}
	}

	// General save function to update information into the database
	function save($form){

		$form_data = array();

		foreach ($form as $key => $value) {
			$form_data[$key] =  $value;
		}

		$query = $this->name . 'id';
		$query = "{$query} = {$form_data[$query]}";

		return $this->db->update($this->name, $form_data, $query);
		
	}

	// General save function to insert information into the database
	function create($form){

		$form_data = array();

		foreach ($form as $key => $value) {
			$form_data[$key] =  $value;
		}

		return $this->db->insert($this->name, $form_data);
		
	}
}