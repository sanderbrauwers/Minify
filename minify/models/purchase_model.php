<?php

class Purchase_Model extends Model{
	public function __construct(){
		parent::__construct();
	}

	public function purchaseList(){
		return $this->db->select('SELECT * FROM purchase LEFT JOIN contact ON contact.contactid = purchase.contactid');
	}
    
	public function purchaseSingleList($purchaseid){
		return  $this->db->select('SELECT * FROM purchase WHERE purchaseid = :purchaseid', 
            array('purchaseid' => $purchaseid));
	}
	
	public function orderDetailSingleList($purchaseid){
		return  $this->db->select('SELECT * FROM order_detail LEFT JOIN product ON product.productid = order_detail.productid WHERE purchaseid = :purchaseid',
            array('purchaseid' => $purchaseid));
	}
	
	public function contactSingleList($purchaseid){
		$contactid = $this->db->select('SELECT contactid FROM purchase WHERE purchaseid = :purchaseid', array('purchaseid' => $purchaseid));
		return  $this->db->select('SELECT * FROM contact WHERE contactid = :contactid', array('contactid' => $contactid[0]['contactid']));
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
				'stock_quantity' => $data['stock_quantity']
			);
        
		$this->db->update('purchase', $postData, "`purchaseid` = '{$data['purchaseid']}'");
	}
    
	public function delete($purchaseid){
		$purchase = $this->db->select('SELECT purchaseid, contactid FROM purchase WHERE purchaseid = :purchaseid', array('purchaseid' => $purchaseid));
		$purchaseid = $purchase[0]['purchaseid'];
		$contactid = $purchase[0]['contactid'];
		
		$this->db->delete('order_detail', "purchaseid = '$purchaseid'");
		$this->db->delete('purchase', "purchaseid = '$purchaseid'");
		$this->db->delete('contact', "contactid = '$contactid'");
	}
	
	public function deleteOrderItem($orderdetail_id){		
		$this->db->delete('order_detail', "orderdetail_id = '$orderdetail_id'");
	}

	public function createOrder($contact_data){
		
		die(var_dump($contact_data));
		$this->db->insert('contact', $contact_data);
		$contact_id = $this->db->lastId();
		$this->db->insert('purchase', array('contactid' => $contact_id, 'order_date' => time()));
		$purchase_id = $this->db->lastId();
		$productsCart = $this->productsCart();
		
		foreach($productsCart as $key => $value) {
									
			$this->db->insert('order_detail', 
				array(
					'purchaseid' => $purchase_id, 
					'productid' => $value['productid'],
					'current_price' => $value['retail_price'],
					'offer_price' => $value['special_offer'],
					'quantity' => $value['count']
				));
		}
	}

	public function totalPrice($purchaseid){
		$products = $this->orderDetailSingleList($purchaseid); // Returns items in shoppingCart
		$totalPrice = 0;
		
		foreach ($products as $value){	
			if($value['offer_price'] == '0.00')
				$totalPrice = $totalPrice + ( $value['quantity'] * $value['current_price']);
			else
				$totalPrice = $totalPrice + ( $value['quantity'] * $value['offer_price']);	
		}
		return $totalPrice;		
	}
}