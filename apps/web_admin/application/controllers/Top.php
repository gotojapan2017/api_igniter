<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH . 'controllers/Application_controller.php';

/**
 * Top controller
 *
 * @property APP_Lang lang
 */
class Top extends Application_controller
{
    protected $role = [];

    /**
     * Top constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->_before_filter('_require_login', [
            'except' => ['login']
        ]);
    }

    /**
     * Index
     */
    public function index()
    {
        echo 'TOP';
    }

    /**
     * Logout from Admin service
     */
    public function logout()
    {
        $this->_api('admin')->logout();
        $this->_redirect('/login');
    }

    /**
     * Login to Admin
     */
    public function login()
    {
        $this->load->helper('form');

        $r = urldecode($this->input->param('r'));

        if (!$r) {
            $r = '/';
        }


        if ($this->current_user->is_login()) {
            $this->_redirect($r);
            return;
        }

        $post = [];
        $error_msg = null;
        $error_object = [];

        if ($this->input->is_post()) {
            $post = $this->input->param();
            $res = $this->_api('auth')->login($post);
            if ($res['submit']) {
                $this->_redirect($r);
                return;
            }

            $error_msg = $this->lang->line('form_validation_admin_login');
        }

        $this->_render([
            'meta' => [
                'title' => 'Service Sign In'
            ],
            'post' => $post,
            'error_msg' => $error_msg,
            'error_object' => $error_object,
            'r' => $r
        ], null, 'layouts/base_full.html');
    }
}
