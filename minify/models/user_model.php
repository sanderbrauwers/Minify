<?php

class User_Model extends Model{
	public function __construct(){
		parent::__construct();
	}

	public function userList(){
		return $this->db->select('SELECT userid, username, 
											role, lastvisit_date, name, gender, email, birth, add_date FROM user');
	}
    
	public function userSingleList($userid){
		return $this->db->select('SELECT userid, username, 
											role, lastvisit_date, name, gender, email, birth, add_date 
											FROM user WHERE userid = :userid', array(':userid' => $userid));
	}
    
	public function create($data){
		
		$this->db->insert('user', 
			array(
				'username' => $data['username'],
				'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
				'role' => $data['role'],
				'gender' => $data['gender'],
				'email' => $data['email'],
				'birth' => $data['birth']
			));
	}
    
	public function editSave($data){
		$postData = array(
				'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
				'role' => $data['role'],
				'name' => $data['name'],
				'gender' => $data['gender'],
				'email' => $data['email'],
				'birth' => $data['birth']
			);	
			$this->db->update('user', $postData, "userid = {$data['id']}");
	}
    
	public function delete($userid){
		$result = $this->db->select('SELECT role FROM user WHERE userid = :userid', array(':userid' => $userid));

		if ($result[0]['role'] == 'owner')
			return false;
        
		$this->db->delete('user', "userid = '$userid'");
	}
}