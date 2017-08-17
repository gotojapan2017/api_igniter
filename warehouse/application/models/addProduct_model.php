<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addProduct_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getCategory()
	{
		$this->db->select('*');
		$data_category = $this->db->get('category');
		return $data_category = $data_category->result_array();
		
	}
	public function getUnit()
	{
		$this->db->select('*');
		$data_unit = $this->db->get('unit');
		return $data_unit = $data_unit->result_array();
		
	}
}

/* End of file addProduct_model.php */
/* Location: ./application/models/addProduct_model.php */