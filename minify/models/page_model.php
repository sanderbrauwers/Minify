<?php
class Page_Model extends Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function pageList(){
		return $this->db->select('SELECT * FROM page');
	}
		
	public function pageSingleList($pageid){	
		return $this->db->select('SELECT * FROM page WHERE pageid = :pageid', 
		array(':pageid' => $pageid));
	}
	    
	public function editSave($data){
		$postData = array(
				'pageid' => $data['pageid'],
      	'title' => $data['title'],
     		'title_alias' => $data['title_alias'],
				'content' => $data['content']
			);
        				
		$this->db->update('page', $postData, "pageid = {$data['pageid']}");
	}
	
	public function delete($pageid){
		$this->db->delete('page', "pageid = '$pageid'");
	}
}