<?php
class Val{
	public function __construct(){
  }
    
	public function minlength($data, $arg){
		if (strlen($data) < $arg)
			return " must be at least $arg characters";
	}
    
	public function maxlength($data, $arg){
		if (strlen($data) > $arg)
			return "*Your string can only be $arg long";
	}
    
	public function digit($data){
		if (ctype_digit($data) == false)
			return " must be a digit";
	}
	public function char($data){
		if (ctype_alpha($data) == false)
			return " must only have alphabetic characters";
	}
    
	public function __call($name, $arguments){
		throw new Exception("$name does not exist inside of: " . __CLASS__);
	}   
}