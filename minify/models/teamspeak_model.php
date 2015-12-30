<?php
class Teamspeak_Model extends Model{
	public function __construct(){
		parent::__construct();
	}
	

	    
	public function restart(){

    echo getcwd() . "\n";

		$response = array(
                    array(
                      'serverid'  => 1, 
                      'status'    => 2)
                  );

    $fp = fopen('data/status.json', 'w');
    fwrite($fp, json_encode($response));
    fclose($fp);
	}
}