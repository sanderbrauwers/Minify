<?php
class View {
	function __construct() {
	}

	public function render($name, $noInclude = false){
		/*
			If noInclude is false, it will auto include header/footer
		*/
		
		
		$filepath = 'views/' . $name . '.php';

		
		if (file_exists($filepath)) {
			if($noInclude){
				//Render without header/footer
				require_once $filepath;
				
			}else{
				require_once "views/header.php";
				require_once $filepath;
				require_once "views/footer.php";
			}
		  
		}else{
		  echo '<div class="bs-callout bs-callout-danger"><h4>Oh snap!</h4>Failed to include view: '.$filepath.'</div>';
		  exit();
		}
  
	}
	//Display form errors
	public function form_errors(){
		if(isset($this->formval)){
			foreach ($this->formval as $key => $value){ ?>
				<div class="alert alert-danger">
		    	<strong>Oh snap!</strong>
		    	<?= ucfirst($key) . $value ;?>
		  	</div>
		  <?php 
			} 
		}	
	}
}