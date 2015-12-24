<?php
class Cart extends Controller {
	public function __construct(){
		parent::__construct();
		Auth::handleLogin();
		$this->view->js = array('cart/js/default.js'); 	
	}
   
	public function index(){   
		$this->view->title = 'Shopping Cart';	
		$this->view->totalPrice = $this->model->totalPrice();	
		$this->view->productList = $this->model->productList();	
		
		$this->view->render('cart/index');
	}	
	
	public function add($id){   
		$this->model->add($id);
		header('Location: ' . $_SERVER['HTTP_REFERER']); // previous page
	}
	
	public function done(){   
		header('Refresh:5; url= ' . URL . 'product');

		$this->view->render('cart/done');

	}
	
	public function delete($id){
		$this->model->delete($id);
		header('location: ' . URL . 'cart');
	}
	
	public function emptyCart(){
		$this->model->emptyCart();	
		header('location: ' . URL . 'cart');
	}
	
	public function checkout(){	
		$this->view->title = 'Checkout';
		$this->view->totalPrice = $this->model->totalPrice();	
		$this->view->productList = $this->model->productList();	
		
		//$respond = Mail::sent('subject', 'sander@gruw.be', 'message');

		$this->view->render('cart/checkout');

	}
	
	public function changeCount($productid, $countValue){
		$this->model->changeCount($productid, $countValue);	
	}
	
	public function printProduct(){
		$this->view->title = 'Print';
		$this->view->totalPrice = $this->model->totalPrice();	
		$this->view->productList = $this->model->productList();	
		    
		$this->view->render('cart/printProduct');
	}   
}