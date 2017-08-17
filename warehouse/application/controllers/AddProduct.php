<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddProduct extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// view category and Unit from mysql
		$this->load->model('addProduct_model');
		$viewCate = $this->addProduct_model->getCategory();
		$viewCate = array('viewFromCategory' => $viewCate);
		$this->load->view('pages/examples/addProduct_view', $viewCate, TRUE);

		$viewUnit = $this->addProduct_model->getUnit();
		$viewUnit = array('viewFromUnit' => $viewUnit);
		$this->load->view('pages/examples/addProduct_view', $viewUnit, FALSE);
	}
	

}

/* End of file AddProduct.php */
/* Location: ./application/controllers/AddProduct.php */