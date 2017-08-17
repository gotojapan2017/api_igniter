<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class viewProduct_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	//select product from database
	public function getAllProduct()
	{
		$this->db->select('*');
		$dataProduct = $this->db->get('product');
		return $dataProduct = $dataProduct->result_array();
		
	}

}

/* End of file addProduct_model.php */
/* Location: ./application/models/addProduct_model.php */