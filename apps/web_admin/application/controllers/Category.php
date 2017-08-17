<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'controllers/Application_controller.php';

/**
 * Category controller
 *
 */
class Category extends Application_controller
{
    /**
     * Category constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Index
     */
    public function index()
    {
        echo 'CATEGORY';
    }
    public function addCategory()
    {
        $this->load->view('top/hehe');
    }
}