<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 11:39:33
         compiled from "views/admin_change.tpl" */ ?>
<?php /*%%SmartyHeaderCode:272916965812fd3a5d5ac0-08512001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e7a6bfaae72350d7cea44683fe14830d51b49da' => 
    array (
      0 => 'views/admin_change.tpl',
      1 => 1477647572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272916965812fd3a5d5ac0-08512001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5812fd3a6377f1_96816152',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5812fd3a6377f1_96816152')) {function content_5812fd3a6377f1_96816152($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
<form method="post">

    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['name'];?>
" name="name">
    <input value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['text'];?>
" name="text">
    <input type="date" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date'];?>
" name="date">
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" name="image">
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['link'];?>
" name="link">
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
" style="display: none" name="id">
    <input type="submit" name="submit">
</form>
<?php } ?><?php }} ?>
