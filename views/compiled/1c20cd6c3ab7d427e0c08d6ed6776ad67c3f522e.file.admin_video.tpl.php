<?php /* Smarty version Smarty-3.1.18, created on 2016-10-28 10:20:51
         compiled from "views/admin_video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7434963305812f86d17e482-26600190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c20cd6c3ab7d427e0c08d6ed6776ad67c3f522e' => 
    array (
      0 => 'views/admin_video.tpl',
      1 => 1477638762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7434963305812f86d17e482-26600190',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5812f86d1cb915_92156474',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5812f86d1cb915_92156474')) {function content_5812f86d1cb915_92156474($_smarty_tpl) {?><form method="post">
    <input type="text" name="title" placeholder="title" required>
    <input type="date" name="date" required>
    <input type="text" name="link" placeholder="link(last part)" required>
    <input type="submit" value="submit">
</form>

<?php }} ?>
