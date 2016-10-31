<?php /* Smarty version Smarty-3.1.18, created on 2016-10-31 09:44:53
         compiled from "views/admin_video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7434963305812f86d17e482-26600190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c20cd6c3ab7d427e0c08d6ed6776ad67c3f522e' => 
    array (
      0 => 'views/admin_video.tpl',
      1 => 1477903491,
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
<fieldset>
    <legend>set video</legend>
        <table>
            <tr>
                <td><input type="text" name="title" placeholder="title" required></td>
                <td><input type="date" name="date" required></td>
                <td><input type="text" name="link" placeholder="link(last part)" required></td>
                <td><input type="submit" value="submit" name="submit"></td>
            </tr>
        </table>
</fieldset>
</form>


<?php }} ?>
