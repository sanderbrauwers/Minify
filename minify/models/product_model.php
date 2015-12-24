<?php
class Product_Model extends Model{
	public function __construct(){
		parent::__construct();
	}
	public function productList(){
		return $this->db->select('SELECT * FROM product LEFT JOIN image ON product.imageid = image.imageid  ORDER BY product.title ASC');
	}
	public function productSingleList($productid){
		return  $this->db->select('SELECT * FROM product LEFT JOIN image ON product.imageid = image.imageid WHERE productid = :productid', 
			array('productid' => $productid));
	}
	public function imageList(){
		return  $this->db->select('SELECT * FROM image');
	}
    	
	public function editSave($data){	
		$postData = array(
				'ref_number' => $data['ref_number'],
				'title' => $data['title'],
				'description' => $data['description'],
				'imageid' => $data['imageid'],
				'unit_box' => $data['unit_box'],
				'purchase_price' => $data['purchase_price'],
				'purchase_price_btw' => $data['purchase_price_btw'],
				'retail_price' => $data['retail_price'],
				'stock_quantity' => $data['stock_quantity'],
				'special_offer'=> $data['special_offer'],
				'suggested_price' => $data['suggested_price'],
				'is_active' => $data['is_active']
			);
        
		$this->db->update('product', $postData, "`productid` = '{$data['productid']}'");
	}
    
	public function delete($productid){
		$this->db->delete('product', "productid = '$productid'");
	}
}