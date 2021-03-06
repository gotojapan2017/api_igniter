<?php
/* Smarty version 3.1.31, created on 2017-08-17 13:50:29
  from "/Applications/MAMP/htdocs/php_training/shared/views/errors/error_general.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5995209576bf86_28211245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20d8f9d0e0f27edb7499f1dec1be62d3fbb99b2e' => 
    array (
      0 => '/Applications/MAMP/htdocs/php_training/shared/views/errors/error_general.html',
      1 => 1502784307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5995209576bf86_28211245 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Error</title>
<style type="text/css">

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	-webkit-box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>
</head>
<body>
	<div id="container">
        <h1><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
	</div>
</body>
</html>
<?php }
}
