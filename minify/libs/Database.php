<?php
class Database extends PDO{
	public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS){
		
		try{
		  parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS);
		}catch (Exception $e){

		  $_GET['headmsg'] = "Oh snap";
		  $_GET['msg'] = 'Could not connect to database, check the config.php file.';

		  include './views/error/header.php';

		  include './views/error/index.php';
		  include './views/error/footer.php';
		  exit();
		}	
	}

   
	/**
	* Select
	*/
	public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC){
		$sth = $this->prepare($sql);
		
		foreach ($array as $key => $value) {
			$sth->bindValue("$key", $value);
		}
		$sth->execute();
		
		return $sth->fetchAll($fetchMode);
	}
   
	/**
	* Insert
	*/
	public function insert($table, $data){
		ksort($data); 
		$fieldNames = implode('`, `', array_keys($data));
		$fieldValues = ':' . implode(', :', array_keys($data));
       
		$sth = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");
		foreach ($data as $key => $value) {
			$sth->bindValue(":$key", $value);
		}
		return $sth->execute();
	}
    
	/**
	* update
	*/
	public function update($table, $data, $where){
		ksort($data);   
		$fieldDetails = NULL;
		
		foreach($data as $key=> $value) {
			$fieldDetails .= "`$key`=:$key,";
		}
		$fieldDetails = rtrim($fieldDetails, ',');  
		$sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
        
		foreach ($data as $key => $value) {
			$sth->bindValue(":$key", $value);
		}
     
		return $sth->execute();
	}
    
	/**
	* delete
	*/
	public function delete($table, $where/*, $limit = 1*/){
		return $this->exec("DELETE FROM $table WHERE $where"); // LIMIT $limit
	}
	
	public function lastId(){
		return $this->lastInsertId(); 	
	}   
}