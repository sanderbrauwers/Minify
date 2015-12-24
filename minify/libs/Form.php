<?php

require 'Form/Val.php';

class Form{

	private $_currentItem = null;  
	private $_postData = array();  
	private $_val = array();
	public $_error = array();
    
	public function __construct(){
		$this->_val = new Val();
	}
    
	/**
	* post - This is to run $_POST
	*/
	public function post($field){
		$this->_postData[$field] = $_POST[$field];
		$this->_currentItem = $field;
		return $this;
	}
    
	/**
	* fetch - Return the posted data
	*/
	public function fetch($fieldName = false){
		if ($fieldName){
			if (isset($this->_postData[$fieldName]))
				return $this->_postData[$fieldName];
			else
				return false;
		}else{
			return $this->_postData;
		}
	}
    
	/**
	* val - This is to validate
	*/
	public function val($typeOfValidator, $arg = null){
		if ($arg == null){
			$error = $this->_val->{$typeOfValidator}($this->_postData[$this->_currentItem]);
		}
		else
			$error = $this->_val->{$typeOfValidator}($this->_postData[$this->_currentItem], $arg);
        
		if ($error)
      $this->_error[$this->_currentItem] = $error;
        
		return $this;
	}
    
	/**
	* Handles the form, and throws an exception upon error.
	*/
	public function submit(){
		if (empty($this->_error))
			return true;
		else{
			$str = '';
			foreach ($this->_error as $key => $value){
				$str .= $key . ' => ' . $value . "\n";
			}
			throw new Exception($str);
		}
	}
}