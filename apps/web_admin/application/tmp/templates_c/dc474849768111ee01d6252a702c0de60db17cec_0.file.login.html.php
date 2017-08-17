<?php
/* Smarty version 3.1.31, created on 2017-08-17 13:12:13
  from "/Applications/MAMP/htdocs/php_training/apps/web_admin/application/views/top/login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5995179d879415_69519219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc474849768111ee01d6252a702c0de60db17cec' => 
    array (
      0 => '/Applications/MAMP/htdocs/php_training/apps/web_admin/application/views/top/login.html',
      1 => 1502940383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5995179d879415_69519219 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="post">
                    <input type="hidden" name="r" value="<?php echo (($tmp = @urlencode($_smarty_tpl->tpl_vars['r']->value))===null||$tmp==='' ? '' : $tmp);?>
">

                    <h1>Service Sign In </h1>

                    <?php if (!empty($_smarty_tpl->tpl_vars['error_msg']->value)) {?>
                    <div class="alert alert-danger" style="text-shadow: none;"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['error_msg']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>
                    <?php }?>

                    <div>
                        <input type="text" class="form-control" placeholder="User ID" name="login_id" required="" value="<?php echo (($tmp = @set_value('login_id'))===null||$tmp==='' ? '' : $tmp);?>
">
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password"  name="password" required="">
                    </div>
                    <div>
                        <button class="btn btn-default submit">Sign In</button>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <div>
                            <h1><?php echo $_smarty_tpl->tpl_vars['meta']->value['site_name'];?>
</h1>
                            <p>&copy; <?php echo $_smarty_tpl->tpl_vars['meta']->value['site_name'];?>
</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>

    </div>
</div>
<?php }
}
