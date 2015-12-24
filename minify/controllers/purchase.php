<?php
class Purchase extends Controller {

	public function __construct(){
		parent::__construct();
		Auth::handleLogin();      	
	}
    
	public function index(){   
		$this->view->title = 'Purchases';
		$this->view->pageTitle = 'Purchases';
		$this->view->purchaseList = $this->model->purchaseList();		

		$this->view->render('purchase/index');
	}
    
	public function create(){	
		$contact_data = array(
			'fname' => $_POST['firstname'],
			'lname' => $_POST['lastname'],
			'street' => $_POST['street'],
			'nr' => $_POST['nr'],
			'postcode' => $_POST['postcode'],
			'city' => $_POST['city'],
			'telephone' => $_POST['telephone'],
			'email' => $_POST['email'],
			'comment' => $_POST['comment']
		);
				
		$this->model->createOrder($contact_data);
		header('location: ' . URL . 'cart/done');
	}
        
	public function delete($id){
		$this->model->delete($id);
		header('location: ' . URL . 'purchase');
	}
	
	public function search($id) {	
		$this->view->title = 'Show products in purchase';
		$this->view->product = $this->model->orderDetailSingleList($id);
		$this->view->totalPrice = $this->model->totalPrice($id);
		$this->view->contact = $this->model->contactSingleList($id);
    
		$this->view->render('purchase/search');
	}
	
	public function deleteOrderItem($id, $redirect_id){
		$this->model->deleteOrderItem($id);
		header('location: ' . URL . 'purchase/search/' .$redirect_id);	
	}

}