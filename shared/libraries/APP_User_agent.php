<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * User Agent クラス
 *
 * @author Yoshikazu Ozawa
 * @uses Net_UserAgent_Mobile
 */
class APP_User_agent extends CI_User_agent
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * IE8かどうか
     *
     * @access public
     * @return bool
     */
    public function is_ie8()
    {
        // TODO: 互換表示をどのように扱うか
        return preg_match("/MSIE\s+8\.0/i", $this->agent) ? TRUE : FALSE;
    }

    /**
     * スマートフォンかどうか
     *
     * @access public
     * @return bool
     */
    public function is_smart_phone()
    {
        return $this->is_mobile() && ($this->is_iphone() || $this->is_android());
    }

    /**
     * タブレットかどうか
     *
     * @access public
     * @return bool
     */
    public function is_tablet()
    {
        return $this->is_ipad() || $this->is_android_tablet();
    }

    /**
     * iPhone(iPod)かどうか
     *
     * @access public
     * @return bool
     */
    public function is_iphone()
    {
        return strpos($this->agent, 'iPhone') !== false;
    }

    /**
     * iPadかどうか
     *
     * @access public
     * @return bool
     */
    public function is_ipad()
    {
        return strpos($this->agent, 'iPad') !== false;
    }

    /**
     * Androidかどうか
     *
     * @access public
     * @return bool
     */
    public function is_android()
    {
        return strpos($this->agent, 'Android') !== false && strpos($this->agent, 'Mobile') !== false;
    }

    /**
     * Androidタブレットかどうか
     *
     * @access public
     * @return bool
     */
    public function is_android_tablet()
    {
        return strpos($this->agent, 'Android') !== false && strpos($this->agent, 'Mobile') === false;
    }

    /**
     * フィーチャーフォンかどうか
     *
     * @access public
     * @return bool
     */
    public function is_feature_phone()
    {
        return $this->is_mobile() && ! $this->is_smart_phone() && ! $this->is_tablet();
    }

    protected function _load_agent_file()
    {
        $loaded = FALSE;

        $paths = array(
            SHAREDPATH.'config/user_agents.php',
            SHAREDPATH.'config/'.ENVIRONMENT.'/user_agents.php',
            APPPATH.'config/user_agents.php',
            APPPATH.'config/'.ENVIRONMENT.'/user_agents.php'
        );

        foreach ($paths as $f) {
            if (file_exists($f)) {
                $loaded = TRUE;
                include $f;
            }
        }

        if (!$loaded) {
            return FALSE;
        }

        $return = FALSE;

        if (isset($platforms)) {
            $this->platforms = $platforms;
            unset($platforms);
            $return = TRUE;
        }

        if (isset($browsers)) {
            $this->browsers = $browsers;
            unset($browsers);
            $return = TRUE;
        }

        if (isset($mobiles)) {
            $this->mobiles = $mobiles;
            unset($mobiles);
            $return = TRUE;
        }

        if (isset($robots)) {
            $this->robots = $robots;
            unset($robots);
            $return = TRUE;
        }

        return $return;
    }
}

