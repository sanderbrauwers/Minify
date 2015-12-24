<?php
class Controller {
	function __construct() {
		//echo 'Main controller<br />';
		$this->view = new View();
		
		try{     
		    $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
		}catch (PDOException $e){
		     //die ('DB Error');
		  $this->view->headmsg = 'Oh snap!';
		  $this->view->msg = 'Error establishing a database connection';
			$this->view->render('error/header');
			$this->view->render('error/index');
			$this->view->render('error/footer');
			exit();  
		}

		$this->view->modules = $this->db->select('SELECT * FROM mini_modules');
	}
    
	/**
	* 
	* @param string $name Name of the model
	* @param string $path Location of the models
	*/
	public function loadModel($name, $modelPath = 'models/') {
		$path = $modelPath . $name.'_model.php';
        
		if (file_exists($path)) {

			$module_active = $this->db->select('SELECT * FROM mini_Modules WHERE name = :name', array(':name' => $name));

			//If module is disabled?
			if(isset($module_active[0]['is_active']) && $module_active[0]['is_active'] === 'false'){
				$this->view->msg = 'This module is disabled';
				$this->view->render('error/header');
				$this->view->render('error/index');
				$this->view->render('error/footer');
				exit();
			}else{ 
				require $modelPath .$name.'_model.php';
				$modelName = $name . '_Model';
				$this->model = new $modelName();
				
			}
		} 
	}
}