<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddCategory extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pages/examples/addCategory_view');
	}

	public function insertCategory($category)
	{
		$category = $this->input->post('$category');	


		echo "<pre>";
		var_dump($category);
		echo "</pre>";
		

		// $this->load->model('addCategory_model');

		// if ($this->addCategory_model->insertData($category))
		// {
		// 	echo "insert thanh cong";
		// }
		// else {
		// 	echo "insert fail, please view code";
		// }
		
	}

}

/* End of file AddCategory.php */
/* Location: ./application/controllers/AddCategory.php */