<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class User_login_token_model
 */
class User_login_token_model extends APP_Model
{
    public $database_name = DB_MAIN;
    public $table_name = 'user_login_token';
    public $primary_key = ['user_id', 'token'];
}
