<?php
class Blog_Model extends Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function blogList(){
		return $this->db->select('SELECT * FROM blog ORDER BY add_date DESC');
	}
		
	public function blogSingleList($blogid){	
		return $this->db->select('SELECT * FROM blog WHERE blogid = :blogid', array(':blogid' => $blogid));		
	}
}