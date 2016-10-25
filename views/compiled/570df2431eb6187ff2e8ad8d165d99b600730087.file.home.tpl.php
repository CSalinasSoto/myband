<?php /* Smarty version Smarty-3.1.18, created on 2016-10-24 12:39:05
         compiled from "views/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2031578584580dcba3e13a06-40715633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '570df2431eb6187ff2e8ad8d165d99b600730087' => 
    array (
      0 => 'views/home.tpl',
      1 => 1477305543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2031578584580dcba3e13a06-40715633',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580dcba3e6e965_35377778',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580dcba3e6e965_35377778')) {function content_580dcba3e6e965_35377778($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/myband/libs/plugins/modifier.truncate.php';
?><?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
<div class="frame">
<iframe width="420" height="315" src="https://www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['link'];?>
" frameborder="0" allowfullscreen></iframe>
    <h3><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['title'],50);?>
</h3>
    <datum><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date'];?>
</datum>

</div>
<?php } ?><?php }} ?>
