<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config["database_schema"] = array(
    // このファイルは自動で生成されるファイルである。
    // データベースのスキーマを更新した場合は、こちらのファイルを生成し直すこと。
    // データベースのスキーマとこのファイルに差分がある状態で本番環境へ移行すると不具合の原因になるので注意すること。

    'etyping_user' => array(

        'bad_user' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'email' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'deleted_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 1),
            'deleted_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 1),
        ),

        'ci_sessions' => array(
            'id' => array('type' => 'string', 'strict_type' => "varchar(40)", 'null' => 0),
            'ip_address' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'timestamp' => array('type' => 'string', 'strict_type' => "int(10) unsigned", 'null' => 0),
            'data' => array('type' => 'string', 'strict_type' => "blob", 'null' => 0),
        ),

        'csv' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'link' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'deleted_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 1),
            'deleted_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 1),
        ),

        'end_user' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'service_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'login_id' => array('type' => 'string', 'strict_type' => "char(50)", 'null' => 0),
            'user_name' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 1),
            'email' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'password' => array('type' => 'string', 'strict_type' => "varchar(128)", 'null' => 0),
            'status' => array('type' => 'string', 'strict_type' => "enum('active','inactive')", 'null' => 0),
            'vip_flg' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'attribute' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 1),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'deleted_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 1),
            'deleted_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 1),
        ),

        'end_user_login_token' => array(
            'end_user_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'token' => array('type' => 'string', 'strict_type' => "varchar(128)", 'null' => 0),
            'user_agent' => array('type' => 'string', 'strict_type' => "text", 'null' => 1),
            'remote_ip' => array('type' => 'string', 'strict_type' => "varchar(128)", 'null' => 1),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'deleted_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 1),
            'deleted_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 1),
        ),

        'ip_restriction' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'ip_address' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'deleted_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 1),
            'deleted_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 1),
        ),

        'password_verification' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'service_admin_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'email' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'token' => array('type' => 'string', 'strict_type' => "varchar(128)", 'null' => 0),
            'expired_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'verified_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 1),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
        ),

        'prefecture' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'name' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'order' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
        ),

        'service_admin' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'login_id' => array('type' => 'string', 'strict_type' => "char(50)", 'null' => 0),
            'user_name' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 1),
            'email' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'name' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'name_kana' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'password' => array('type' => 'string', 'strict_type' => "varchar(128)", 'null' => 0),
            'note' => array('type' => 'string', 'strict_type' => "text", 'null' => 1),
            'type' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'status' => array('type' => 'string', 'strict_type' => "enum('active','inactive')", 'null' => 0),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'deleted_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 1),
            'deleted_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 1),
        ),

        'service_admin_history' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'service_admin_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'ip' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 1),
            'user_agent' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 1),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
        ),

        'service_admin_login_token' => array(
            'service_admin_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'token' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'user_agent' => array('type' => 'string', 'strict_type' => "text", 'null' => 1),
            'remote_ip' => array('type' => 'string', 'strict_type' => "varchar(128)", 'null' => 1),
            'type' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'deleted_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 1),
            'deleted_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 1),
        ),

        'service_admin_service' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'service_admin_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'service_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'status' => array('type' => 'string', 'strict_type' => "enum('stopped','using')", 'null' => 0),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
        ),
    ),

    'etyping_score' => array(

        'score' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'end_user_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'service_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'score' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'wpm' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'epm' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'correct_rate' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'char_count' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'miss_count' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'wrong_char' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 1),
            'tp_type' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'highest_flg' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'date_highest' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 1),
            'highest_token' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 1),
            'tmp_flg' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'deleted_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 1),
            'deleted_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 1),
        ),

        'score_cache' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'end_user_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'ranking_score' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 1),
            'ranking_times' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 1),
            'highest_score' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'average_score' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'growth_rate' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'play_times' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 1),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 1),
        ),
    ),

    'etyping_service' => array(

        'distributor' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'name' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'status' => array('type' => 'string', 'strict_type' => "enum('stopped','using')", 'null' => 0),
            'address' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'department_name' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'person_in_charge' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'person_in_charge_kana' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'phone_number' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'email' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'billing_cycle' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'payment_month' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'payment_date' => array('type' => 'date', 'strict_type' => "date", 'null' => 0),
            'postal_code' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'building_name' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'deleted_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 1),
            'deleted_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 1),
        ),

        'service' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'name' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'type' => array('type' => 'string', 'strict_type' => "tinyint(3) unsigned", 'null' => 0),
            'app_id' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'app_secret' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 1),
            'status' => array('type' => 'string', 'strict_type' => "enum('active','inactive')", 'null' => 0),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'deleted_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 1),
            'deleted_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 1),
        ),

        'service_basic_info' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'service_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'user_usage' => array('type' => 'string', 'strict_type' => "tinyint(3) unsigned", 'null' => 0),
            'number_of_user' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'number_of_user_limit' => array('type' => 'string', 'strict_type' => "tinyint(3) unsigned", 'null' => 0),
            'service_type' => array('type' => 'string', 'strict_type' => "tinyint(3) unsigned", 'null' => 0),
            'number_of_service_user_issued' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'goal_score' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'deleted_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 1),
            'deleted_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 1),
        ),

        'service_billing_history' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'service_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'billing_amount' => array('type' => 'string', 'strict_type' => "bigint(20)", 'null' => 0),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
        ),

        'service_billing_info' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'service_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'date_start_service' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'billing_term' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'distributor_name' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 1),
            'billing_amount' => array('type' => 'string', 'strict_type' => "bigint(20)", 'null' => 0),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
        ),

        'service_ip_restriction' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'service_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'ip_address' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
        ),

        'service_profile' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'service_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'company_name' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'company_name_kana' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 1),
            'street' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'contact_person_name' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'contact_person_name_kana' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 1),
            'phone_number' => array('type' => 'string', 'strict_type' => "char(20)", 'null' => 0),
            'email' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'postal_code' => array('type' => 'string', 'strict_type' => "char(8)", 'null' => 0),
            'prefecture_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'address' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'building_name' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'building_name_kana' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 1),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
        ),
    ),

    'etyping_typing_content' => array(

        'typing_category' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'name' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'order' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
        ),

        'typing_content' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'typing_category_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'name' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'status' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'type' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'input_method' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'deleted_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 1),
            'deleted_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 1),
        ),

        'typing_content_profile' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'typing_content_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'num_load_ex_sentence' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'shaffle_ex' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'sns_button' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'sns_control' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'sns_url' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 0),
            'control_register_result' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'control_register_ranking' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'control_show_roma_kana' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'control_show_kana' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'practice_result' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'time_limit' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'show_text_result' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'mistype_flg' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'lesson_mode' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'num_ex_load_starter' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'num_ex_load_easy' => array('type' => 'string', 'strict_type' => "int(11)", 'null' => 0),
            'easy_ex_lesson_mode' => array('type' => 'string', 'strict_type' => "tinyint(4)", 'null' => 0),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
        ),

        'typing_example_sentence' => array(
            'id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'typing_content_id' => array('type' => 'string', 'strict_type' => "bigint(19) unsigned", 'null' => 0),
            'japanese_sentence' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 1),
            'hiragana_sentence' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 1),
            'alphabet_sentence' => array('type' => 'string', 'strict_type' => "varchar(255)", 'null' => 1),
            'created_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'created_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'updated_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 0),
            'updated_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 0),
            'deleted_at' => array('type' => 'datetime', 'strict_type' => "datetime", 'null' => 1),
            'deleted_by' => array('type' => 'string', 'strict_type' => "varchar(45)", 'null' => 1),
        ),
    ),
);
