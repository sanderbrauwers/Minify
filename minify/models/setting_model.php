<?php

class Setting_Model extends Model{
	public function __construct(){
		parent::__construct();
	}

	public function modulesList(){
		return $this->db->select('SELECT * FROM mini_modules');
	}
	public function logList(){
		return $this->db->select('SELECT * FROM mini_log LEFT JOIN user ON user.userid  = mini_log.userid  ORDER BY mini_log.logid DESC' );
	}
	public function logUsers(){
		return $this->db->select('SELECT mini_log.userid, user.username, mini_log.ipadress, mini_log.date  FROM mini_log LEFT JOIN user ON user.userid  = mini_log.userid WHERE mini_log.type = "user" ORDER BY mini_log.logid DESC LIMIT 10' );
	}
    
	public function editSave($data){
		var_dump($data);
		
		//SAVE DATA IN DATABASE
	}
}