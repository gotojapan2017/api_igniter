<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once SHAREDPATH . 'libraries/APP_Api.php';

/**
 * Base API
 *
 * @property APP_Loader load
 * @property CI_Session session
 * @property CI_Lang lang
 * @property APP_Config config
 * @property APP_Smarty smarty
 * @property APP_Email email
 * @property APP_Input input
 */
class Base_api extends APP_Api
{
    const USER_NOT_FOUND = 41010;
    const TOKEN_NOT_FOUND = 41020;
    const USER_IS_INACTIVE = 41030;

    /**
     * Standard Validator Class
     *
     * @var string
     */
    public $validator_name = 'Base_api_validation';

    /**
     * @var Base_api_validation
     */
    public $validator = NULL;

    /**
     * Array schema for csv
     */
    public $_schemas = NULL;

    /**
     * Identify email subject title
     *
     * @var array subject japan email
     */
    public $subject_jp_email = [
    ];

    /**
     * Debug api
     *
     * @param $value
     */
    public function debug($value)
    {
        echo '<html lang="ja">';
        echo '<meta charset="utf-8"/>';
        echo "<pre>";
        print_r($value);
        exit;
    }

    /**
     * Send mail
     *
     * @param string $path
     * @param array $config Config to send email
     * @param array $data Data to create body
     *
     * @internal param string $to Email to
     * @internal param string $to_name Email to name
     * @internal param string $subject Subject of sending mail
     *
     * return void
     */
    public function send_mail($path, $config = [], $data = [])
    {
        // Load the library
        $this->load->library('smarty');

        $res = $this->smarty->view(SHAREDPATH . 'views/' . $path, array_merge($data, [
            'site_name' => $this->config->item('site_name')
        ]), TRUE);

        // Remove un-use resource
        unset($this->smarty);

        // Send
        $this->load->library('email');
        $this->email
            ->from($config['from'], $this->config->item('mail_from_name'))
            ->to($config['to'], !empty($config['to_name']) ? $config['to_name'] : null)
            ->subject($config['subject'])
            ->message($res)
            ->set_mailtype(isset($config['mail_type']) ? 'html' : 'text')
            ->send();
    }

    /**
     * Set params default
     *
     * @param array $params
     * @internal param int $offset
     * @internal param int $limit
     *
     * @return array
     */
    public function _set_default(&$params)
    {
        // Set the value for Offset : default 0
        $params['offset'] = isset ($params['offset']) && !empty($params['offset'])
            ? (int)$params['offset'] : 0;

        // Set the value for Limit : default 20
        $params['limit'] = isset ($params['limit']) && !empty($params['limit'])
            ? (int)$params['limit'] : 20;

        // Set maximum limit for limit params for security
        if ($params['limit'] > 200) {
            $params['limit'] = 200;
        }

        return $params;
    }

    /**
     * Filter and re-format value data.
     * @param $value
     * @return mixed|string
     */
    protected function _filter($value) {
        // Unify line endings
        $value = nl2br($value);

        // Replace new line and tab character
        preg_replace('[\r\n]', '', $value);

        // Escape double quotation
        $value = str_replace("\"", "\"\"", $value);
        return $value;
    }

    /**
     * Function build csv
     *
     * @param string $file_name
     * @param array $data
     * @param array $data_header
     * @return string
     */
    public function _build_csv_export($file_name, $data, $data_header = [])
    {
        $options = array_merge([
            'format' => 'csv',
            'output' => 'php://output',
            'encode' => 'Shift-JIS'
        ]);

        header("Content-Type: text/csv; charset={$options['encode']}");
        header('Content-Disposition: attachment; filename="'.$file_name.'.csv"');

        // Declare file use memory
        $fp = fopen($options['output'], "w");

        // Put header
        fputcsv($fp, array_map(function($h) use($options) {
            return mb_convert_encoding($h, $options['encode']);
        }, $data_header), ",", '"');

        // Put row content
        foreach($data AS $row) {
            $row_data = [];
            foreach($row AS $value) {
                $row_data[] = $value;
            }

            fputcsv($fp, array_map(function($d) use ($options) {
                return mb_convert_encoding($d, $options['encode']);
            }, $row_data), ",", '"');
        }

        // Read content from variable
        // rewind($fp);
        $csv = stream_get_contents($fp);
        fclose($fp);

        return $csv;
    }

    /**
     * Execute curl
     *
     * @param array $params
     * @internal param array $data
     * @internal param array $headers
     * @internal param string $url
     * @internal param string $method
     *
     * @return mixed
     */
    public function execute_curl($params = []) {
        $data_string = json_encode($params['data']);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $params['url']);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $params['method']);

        if ($params['method'] = 'POST') {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type:application/json',
            'Accept:application/json',
            'Auth:' . $params['headers']['app_id'] . ':' . $params['headers']['app_secret']
        ]);

        echo curl_exec($ch);
    }

}

/**
 * Class Base_api_validation
 */
class Base_api_validation extends APP_Api_validation {

    /**
     * パーミッション
     * @var array
     */
    private $_has_permission = TRUE;

    /**
     * パーミッションチェック
     *
     * @access public
     * @return void
     */
    public function require_permissions()
    {
        $permissions = func_get_args();
        $this->_has_permission = (!$this->base->operator()->is_anonymous() && $this->base->operator()->has_all_permissions($permissions));
    }

    /**
     * 一部のパーミッションを取得しているか
     *
     * @access public
     * @return void
     */
    public function require_either_permissions()
    {
        $permissions = func_get_args();
        $this->_has_permission = (!$this->base->operator()->is_anonymous() && $this->base->operator()->has_either_permissions($permissions));
    }

    /**
     * Valid email format
     *
     * @param string $email
     *
     * @return bool
     */
    public function validate_email_format($email) {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->set_message('validate_email_format', 'メールアドレスの形式が間違っています');

            return FALSE;
        }

        return TRUE;
    }


    /**
     * Valid half-width number
     *
     * @param string $value
     *
     * @return bool
     */
    public function valid_half_width_number($value) {

        if (preg_match("/([０-９])/", $value)) {
            $this->set_message('valid_half_width_number', '%sは半角英数字で入力してください');
            return FALSE;
        }

        return TRUE;
    }

    /**
     * Validate negative number
     *
     * @param string $value
     *
     * @return bool
     */
    public function valid_negative_number($value) {

        if ((int) $value < 0) {
            $this->set_message('valid_negative_number', '%sは正数で入力してください');

            return FALSE;
        }

        return TRUE;
    }

    /**
     * Validate min length number
     *
     * @param string $str
     * @param string $val
     *
     * @return bool
     */
    public function min_number($str, $val) {
        if ( ! is_numeric($val) || ! is_numeric($val) || !($val <= intval($str)))
        {
            $this->set_message('min_number', $val . '以上の数字を入力してください');
            return FALSE;
        }

        return TRUE;
    }

    /**
     * Validate max length number
     *
     * @param string $str
     * @param string $val
     *
     * @return bool
     */
    public function max_length_number($str, $val) {

        if ( ! is_numeric($val) || ! is_numeric($val) || !($val >= mb_strlen($str)))
        {
            $this->set_message('max_length_number', $val.'桁以内で入力してください');
            return FALSE;
        }

        return TRUE;
    }

    /**
     * valid user id format
     *
     * @param $login_id
     * @return bool
     */
    function valid_login_id_format($login_id) {

        if(preg_match('/[^a-z_\-0-9]/i', $login_id)){
            $this->set_message('valid_login_id_format', 'ユーザーIDの形式が間違っています');
            return FALSE;
        }

        return TRUE;
    }

    /**
     * Check password with 4-16 half-width alphanumeric
     *
     * @param string $password
     *
     * @return bool
     */

    function valid_admin_password($password) {

        if(preg_match('/[^a-z_ \-0-9]/i', $password) || 4 > mb_strlen($password) || 16 < mb_strlen($password)){
            $this->set_message('valid_admin_password', 'パスワードは4～16文字以内の半角英数字で入力してください');
            return FALSE;
        }

        return TRUE;
    }

}
