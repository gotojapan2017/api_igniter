<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ViewProduct extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pages/tables/viewProduct_view');
	}

	//view data of product
	public function product()
	{
		$this->load->model('viewProduct_model');
		$data = $this->viewProduct_model->getAllProduct();
		$data = array('dataFromProduct' => $data);
		$this->load->view('pages/tables/viewProduct_view', $data, FALSE);
	}
}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */