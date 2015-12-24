<?php

class Api_Model extends Model{
	public function __construct(){
		parent::__construct();
	}

	public function blogList(){
		return $this->db->select('
			SELECT 
			blogid,
			blog.title, 
			blog.add_date, 
			blog.modify_date, 
			blog.content,
			user.username as "user"

			FROM blog INNER JOIN user ON blog.userid = user.userid WHERE blog.is_active = "true" ORDER BY add_date DESC 
			');
	}
	public function SingleBlog($blogid){
		return $this->db->select('
			SELECT 
			blogid,
			blog.title, 
			blog.add_date, 
			blog.modify_date, 
			blog.content,
			user.username as "user"
											
			FROM blog INNER JOIN user ON blog.userid = user.userid WHERE blog.is_active = "true" AND blogid = :blogid ORDER BY add_date DESC', array(':blogid' => $blogid));
	}
	public function pageList(){
		return $this->db->select('
			SELECT 
			pageid,
			page.title, 
			page.title_alias, 
			page.add_date, 
			page.modify_date, 
			page.content

			FROM page ORDER BY add_date DESC 
			');
	}
	public function SinglePage($pageid){
		return $this->db->select('
			SELECT 
			pageid,
			page.title, 
			page.title_alias, 
			page.add_date, 
			page.modify_date, 
			page.content
											
			FROM page WHERE pageid = :pageid ORDER BY add_date DESC', array(':pageid' => $pageid));
	}
}