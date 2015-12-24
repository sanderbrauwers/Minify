<?php
class Product extends Controller {
	public function __construct(){
		parent::__construct();
		Auth::handleLogin();
		$this->view->js = array('product/js/default.js');
	}

	public function index(){   
		$this->view->title = 'Products list';
		$this->view->pageTitle = 'All Products';
		$this->view->productList = $this->model->productList();
		
		$this->view->render('product/index');
	}
	
	public function add(){   
		$this->view->title = 'Products';
		$this->view->pageTitle = 'Add new Product';
		$this->view->productList = $this->model->productList();
		$this->view->imageList = $this->model->imageList();
		
		$this->view->render('product/add');
	}
	
    
	public function create(){	
		$data = array(
			'ref_number' => $_POST['ref_number'],
			'title' => $_POST['title'],
			'description' => $_POST['description'],
			'imageid' => $_POST['imageid'],
			'unit_box' => $_POST['unit_box'],
			'purchase_price' => $_POST['purchase_price'],
			'purchase_price_btw' => $_POST['purchase_price_btw'],
			'retail_price' => $_POST['retail_price'],
			'stock_quantity' => $_POST['stock_quantity'],
			'suggested_price' => $_POST['suggested_price'],
		);
		
		$this->model->create($data);
		header('location: ' . URL . 'product/add');
	}
    
	public function edit($id) {
		$this->view->title = 'Edit product';
		$this->view->pageTitle = 'Edit Product';
		$this->view->product = $this->model->productSingleList($id);
		$this->view->imageList = $this->model->imageList(); 
		if (empty($this->view->product)) die('This is an invalid product!');
	
		$this->view->render('product/edit');
	}
	    
	public function editSave($productid){	
		$data = array(
			'productid' => $productid,
			'ref_number' => $_POST['ref_number'],
			'title' => $_POST['title'],
			'description' => $_POST['description'],
			'imageid' => $_POST['imageid'],
			'unit_box' => $_POST['unit_box'],
			'purchase_price' => $_POST['purchase_price'],
			'purchase_price_btw' => $_POST['purchase_price_btw'],
			'retail_price' => $_POST['retail_price'],
			'stock_quantity' => $_POST['stock_quantity'],
			'special_offer'=> $_POST['special_offer'],
			'suggested_price' => $_POST['suggested_price'],
			'is_active' => $_POST['is_active']	
		);
        
		// @TODO: Do your error checking!
		$this->model->editSave($data);
		header('location: ' . URL . 'product');
	}
    
	public function delete($id){
		$this->model->delete($id);
		header('location: ' . URL . 'product');
	}
}