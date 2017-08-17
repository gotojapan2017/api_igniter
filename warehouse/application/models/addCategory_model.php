<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class addCategory_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getAllCategory()
	{
		$this->db->select('*');
		$data_Category = $this->db->get('category');
		$data_Category = $data_Category->result_array();

		echo "<pre>";
		var_dump($data_Category);
		echo "</pre>";
		
	}
	public function insertData($category)
	{
		$category_Data = array(
			'category' => $category);
		return $this->db->update('category', $category_Data);
	}

}

/* End of file addCategory_model.php */
/* Location: ./application/models/addCategory_model.php */