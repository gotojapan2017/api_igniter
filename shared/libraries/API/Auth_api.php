<?php if (!defined('APPPATH')) exit('No direct script access allowed');

require_once SHAREDPATH . 'libraries/API/Base_api.php';

/**
 * Class Auth_api
 *
 * @property User_model $user_model
 */
class Auth_api extends Base_api {

    /**
     * Validator
     *
     * @var string
     */
    public $validator_name = 'Auth_api_validation';

    /**
     * GA_001 - Global admin login
     *
     * @param array $params
     * @internal param string $login_id
     * @internal param string $password
     *
     * @return array
     */
    public function login($params = []) {

        $v = $this->validator($params);
        $v->set_rules('login_id', $this->lang->line('login_id'), 'is_string');
        $v->set_rules('password', $this->lang->line('password'), 'is_string');
        $v->set_rules('auto_login', $this->lang->line('auto_login'));

        if (FALSE === $v->run()) {
            return $v->error_json();
        }

        // Load library
        $this->load->library('session');

        // Load model
        $this->load->model('user_model');

        // Query get user record
        $user = $this->user_model->find_by([
            'login_id' => $params['login_id']
        ]);

        // Check user exist or not
        if (empty($user)) {
            return $this->false_json(self::BAD_REQUEST, $this->lang->line('login_id_and_password_is_incorrect'));
        }

        // Check password
        if (strcmp($user->password, $params['password']) != 0) {
            return $this->false_json(self::BAD_REQUEST, $this->lang->line('login_id_and_password_is_incorrect'));
        }

        // Save cookie
        if (!empty($params['auto_login']) && $params['auto_login'] == 'on') {
            $this->session->set_userdata('is_remember_me', TRUE);
        }

        $this->session->set_userdata('user_id', $user->id);

        // Return
        return $this->true_json($this->build_response($user));
    }

    /**
     * User logout from system
     *
     * @return array
     */
    public function logout() {

        // Load library
        $this->load->library('session');
        $this->load->helper('cookie');

        // Load model
        $this->load->model('service_admin_login_token_model');

        // Delete cookie and token
        if (is_array($_COOKIE)) {
            foreach (array_keys($_COOKIE)  AS $k) {
                if (!preg_match('/^ETYPING\_/', $k)) {
                    continue;
                }

                delete_cookie($k);
                $this->service_admin_login_token_model->delete_autologin($this->input->cookie($k));
            }
        }

        // Delete session
        $this->session->sess_destroy();

        return $this->true_json();
    }

    /**
     * Build response
     *
     * @param object $record
     * @internal param int $id
     * @internal param string $user_name
     * @internal param string $email
     * @internal param string $name
     * @internal param string $name_kana
     * @internal param string $note
     * @internal param int $type
     * @internal param string $status
     * @internal param datetime $created_at
     * @internal param datetime $updated_at
     * @param array $options
     * @return array
     */
    protected function build_response($record, $options = []) {

        if (empty($record)) {
            return [];
        }

        $result = [
            'id' => (int) $record->id,
            'user_name' => isset($record->user_name) ? $record->user_name : null,
            'email' => !empty($record->email) ? $record->email : '',
            'name' => !empty($record->name) ? $record->name : '',
            'name_kana' => !empty($record->name_kana) ? $record->name_kana : '',
            'note' => !empty($record->note) ? $record->name_kana : '',
            'type' => !empty($record->type) ? (int) $record->type : '',
            'status' => !empty($record->status) ? (int) $record->status : '',
            'created_at' => !empty($record->created_at) ? business_date('Y-m-d', $record->created_at) : '',
            'updated_at' => !empty($record->updated_at) ? business_date('Y-m-d', $record->created_at) : '',
        ];

        return $result;
    }
}

/**
 * Class Auth_api_validation
 */
class Auth_api_validation extends Base_api_validation
{

}