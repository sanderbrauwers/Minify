<?php
class Cart_Model extends Model{
	public function __construct(){
		parent::__construct();
	}

	// Add new product to cart
	public function add($userid){
		Session::init();
		if(empty($_SESSION['products'])){
			$_SESSION['products'] =  array();	
		}
		
		$found = false;
		for($i = 0; $i < sizeof($_SESSION['products']);$i++){
			if($_SESSION['products'][$i]['id'] == $userid){
				$this->addProductCount($i);
				$found = true;
				break;
			}
		}
		if(!$found){
			$product = array( 'id' => $userid , 'count' => 1);
			array_push($_SESSION['products'], $product);
		}
	}
	
	// Delete product to cart
	public function delete($productid){
		Session::init();	
		foreach($_SESSION['products'] as $key => $value) {
			if($value['id'] == $productid)
				unset($_SESSION['products'][$key]);	
		}	
	}
	
	// Returns the products in cart
	public function productList(){
	
		Session::init();
		$products = array();
		if(Session::get('products')){
			foreach (Session::get('products') as $value){
				
				$productDetails = $this->db->select('SELECT * FROM product LEFT JOIN image ON product.imageid = image.imageid WHERE productid = :productid', 
					array('productid' => $value['id']));	
				$productDetails[0]['count'] =  $value['count'];
				array_push($products, $productDetails[0]);			
			}
		}
		return $products;
	}
	
	// Add count of product
	public function addProductCount($key){
		Session::init();
		$_SESSION['products'][$key]['count'] = $_SESSION['products'][$key]['count'] + 1;	
	}
	
	// Change count of product
	public function changeCount($productid, $count){
		Session::init();
		if($count <= 0) $count = 1;
		
		foreach($_SESSION['products'] as $key => $value) {
			if($value['id'] == $productid)
				$_SESSION['products'][$key]['count'] = $count;	
		}
	}
	
	public function totalPrice(){
		$products = $this->productList(); // Returns items in shoppingCart
		$totalPrice = 0;
		
		foreach ($products as $value){	
			if($value['special_offer'] == '0.00')
				$totalPrice = $totalPrice + ( $value['count'] * $value['retail_price']);
			else
				$totalPrice = $totalPrice + ( $value['count'] * $value['special_offer']);
		}
		return $totalPrice;		
	}
	
	public function emptyCart(){
		Session::init();
		Session::remove('products');
	}
}