<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['sendable'] = TRUE;

$config['project'] = 'Smart Ticket';
$config['template_path'] = "";    // なければ標準のものを利用する
$config['masked_parameters'] = array('password');

// for email
//$config['driver'] = 'email';
//$config['from'] = array("no-reply-test@nal.vn", "Error notifier");
//$config['to'] = array("");

// for amazon sns
// $config['driver'] = 'amazon';
// $config['key'] = '';
// $config['secret'] = '';
// $config['region'] = 'ap-northeast-1';
// $config['topic'] = '';

// For Slack
//$config['driver'] = 'slack';
//$config['from'] = 'Error notifier';
//$config['web_hook'] = '';
//$config['channel'] = '';

