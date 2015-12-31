<?php
class Teamspeak_Model extends Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function restart(){

    //0: Offline, 1: Online, 2: Restart, 3: Start, 4: Stop

    $serverid = 1;

    $r = $this->db->select('SELECT * FROM server WHERE serverid = :serverid AND status = 1' , array(':serverid' => $serverid));
  
    if($r){
      $postData = array(
        'status' => 2,
        'message' => 'Restart initiated'
      );
        
      $result = $this->db->update('server', $postData, "`serverid` =  {$serverid}");

      echo getcwd() . "\n";

      $response = array(
                      array(
                        'serverid'  => 1, 
                        'status'    => 2)
                    );

      $fp = fopen('data/status.json', 'w');
      $r = fwrite($fp, json_encode($response));
      fclose($fp);
      if(!$r){
        $postData = array(
          'status' => 1,
          'message' => 'Failed to write Json file during restart'
        );
          
        $result = $this->db->update('server', $postData, "`serverid` =  {$serverid}");
      }
      
 
    }

    
    
	}
}