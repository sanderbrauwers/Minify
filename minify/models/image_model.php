<?php

//http://www.verot.net/php_class_upload.htm
class Image_Model extends Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function imageList(){
		return  $this->db->select('SELECT * FROM image');
	}
	
	public function imageSingleList($imageid){
		return $this->db->select('SELECT * FROM image WHERE imageid = :imageid', array(':imageid' => $imageid));
	}
	
	public function run(){	

		$upload = new Upload($_FILES);
		$Token = new Token;
		$token = $Token->getToken();

		$upload->load();

		$upload->cropImage(90,90);
		$upload->save($token .'_s');
		$upload->cropImage(160,160);
		$upload->save($token .'_b');

		$upload->scaleImage(160,160);
		$upload->save($token .'_t');

		$upload->scaleImage(320,320);
		$upload->save($token .'_m');

		$upload->scaleImage(640,640);
		$upload->save($token .'_l');

		$upload->scaleImage(1024,1024);
		$upload->save($token .'_h');

		$this->create($upload->returnInfo($token));
	}
			
	public function delete($imageid){
		/*
		$image = $this->imageSingleList($imageid);
		
		if(!empty($image)){
			$this->db->delete('image', "imageid = '$imageid'");
			unlink(UPLOAD_FOLDER . $image[0]['name'] . '.' . $image[0]['ext']); //delete original file
			unlink(UPLOAD_FOLDER . 'thumbnails/big/' . $image[0]['name']. '.' . $image[0]['ext']); //delete thumbnail
			unlink(UPLOAD_FOLDER . 'thumbnails/mid/' . $image[0]['name']. '.' . $image[0]['ext']); //delete thumbnail
			unlink(UPLOAD_FOLDER . 'thumbnails/tiny/' . $image[0]['name']. '.' . $image[0]['ext']); //delete thumbnail
		}   */    
	}
}