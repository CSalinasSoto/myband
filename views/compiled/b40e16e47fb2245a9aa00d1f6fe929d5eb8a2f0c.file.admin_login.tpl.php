<?php /* Smarty version Smarty-3.1.18, created on 2016-10-31 00:38:20
         compiled from "views/admin_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5997864165816846c449118-63245894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b40e16e47fb2245a9aa00d1f6fe929d5eb8a2f0c' => 
    array (
      0 => 'views/admin_login.tpl',
      1 => 1477870236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5997864165816846c449118-63245894',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5816846c497f58_30287617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5816846c497f58_30287617')) {function content_5816846c497f58_30287617($_smarty_tpl) {?><fieldset>
    <legend>login</legend>
    <form method="post">
        <input type="text" name="user">
        <input type="password" name="pass">
        <input type="submit" value="login" name="submit">
    </form>
</fieldset><?php }} ?>
