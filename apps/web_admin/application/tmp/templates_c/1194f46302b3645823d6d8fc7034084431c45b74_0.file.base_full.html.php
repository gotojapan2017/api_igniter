<?php
/* Smarty version 3.1.31, created on 2017-08-17 12:14:32
  from "/Applications/MAMP/htdocs/php_training/apps/web_admin/application/views/layouts/base_full.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59950a18ddd202_02554813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1194f46302b3645823d6d8fc7034084431c45b74' => 
    array (
      0 => '/Applications/MAMP/htdocs/php_training/apps/web_admin/application/views/layouts/base_full.html',
      1 => 1502784307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/html_head.html' => 1,
  ),
),false)) {
function content_59950a18ddd202_02554813 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_content_yield')) require_once '/Applications/MAMP/htdocs/php_training/shared/libraries/Smarty/plugins/function.content_yield.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:layouts/html_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo smarty_function_content_yield(array('name'=>"head_css"),$_smarty_tpl);?>

</head>
<body class="login">
<?php echo smarty_function_content_yield(array('name'=>"main"),$_smarty_tpl);?>


<?php echo smarty_function_content_yield(array('name'=>"head_js"),$_smarty_tpl);?>

</body>
</html><?php }
}
