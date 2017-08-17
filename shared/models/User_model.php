<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once SHAREDPATH . 'core/APP_Model.php';
require_once SHAREDPATH . 'models/modules/APP_Password_encryptable.php';

/**
 * Class User_model
 * 
 * @property APP_Loader load
 * @property APP_Input input
 * @property User_login_token_model user_login_token_model
 */
class User_model extends APP_Model
{
    use APP_Password_encryptable;

    public $record_class = 'User_record';

    public $database_name = DB_MAIN;
    public $table_name = 'user';
    public $primary_key = 'id';

    /**
     * Save auto login information
     *
     * @param int $id
     *
     * @return array|bool
     */
    public function set_autologin($id)
    {
        // Load helper
        $this->load->helper('string_helper');

        // Load model
        $this->load->model('user_login_token_model');

        $res = $this->user_login_token_model->create([
            'user_id' => $id,
            'token' => random_string('alnum', 32),
            'user_agent' => $this->input->user_agent(),
            'remote_ip' => $this->input->ip_address()
        ], [
            'mode' => 'replace',
            'return' => TRUE
        ]);

        return $res;
    }

    /**
     * @param string $token
     *
     * @return array
     */
    public function get_auto_login($token)
    {
        $this->load->model('user_login_token_model');
        return $this->user_login_token_model
            ->where('token', $token)
            ->first();
    }
}

/**
 * User record
 *
 * @version $id$
 * @copyright 2014- Interest Marketing, inc. (CONTACT info@interest-marketing.net)
 */
class User_record implements APP_Operator
{
    use APP_Password_encryptable_record;

    /**
     * @var null ID
     */
    public $id = null;

    /**
     * 未ログインユーザーかどうか
     *
     * @access public
     * @return bool
     */
    public function is_anonymous()
    {
        return FALSE;
    }

    /**
     * ログインしているかどうか
     *
     * @access public
     * @return bool
     */
    public function is_login()
    {
        return TRUE;
    }

    /**
     * 管理者かどうか
     *
     * @access public
     * @return bool
     */
    public function is_administrator()
    {
        return FALSE;
    }

    /**
     * 操作者IDを返す
     *
     * @access public
     * @return mixed
     */
    public function _operator_id()
    {
        return $this->id;
    }

    /**
     * 操作者名を返す
     *
     * @access public
     * @return string
     */
    public function _operator_name()
    {
        return $this->nickname;
    }

    /**
     * 操作者識別子を返す
     *
     * @access public
     * @return string
     */
    public function _operator_identifier()
    {
        return "user:" . $this->id;
    }

    /**
     * Set user operator by
     *
     * @return string
     */
    public function _operated_by()
    {
        return "user:" . $this->id;
    }
}
