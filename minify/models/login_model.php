<?php
class Login_Model extends Model{
	public function __construct(){
		parent::__construct();
	}

	public function run(){
		$sth = $this->db->prepare("SELECT userid, role, username FROM user WHERE 
                username = :username AND password = :password");
		$sth->execute(
					array(
						':username' => $_POST['username'],
            ':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
        	));
        
		$data = $sth->fetch();  
		$count =  $sth->rowCount();
		
		if($count > 0){
			// login
			Session::init();
      Session::set('role', $data['role']);
			Session::set('loggedIn', true);
			Session::set('userid', $data['userid']);
			Session::set('username', $data['username']);
			
			$this->db->insert('mini_log', 
				array(
          'userid' => $data['userid'],
          'action' => ('logged in'),
					'type' => 'user',
					'ipadress' => $_SERVER['REMOTE_ADDR']
				)
			);

			header('location: ../index');
			
		}else echo 'Login failed';
		
		/*header('location: ../login');   */ 
	}
	
	public function logout(){
		Session::init();
		Session::remove('role');
		Session::remove('loggedIn');
		Session::remove('userid');
		Session::remove('username');
		
		header('location: ../index');       
	}   
}