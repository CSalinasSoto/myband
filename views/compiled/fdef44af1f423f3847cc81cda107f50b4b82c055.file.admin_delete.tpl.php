<?php /* Smarty version Smarty-3.1.18, created on 2016-10-31 09:45:18
         compiled from "views/admin_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7259246355813265d11fbb8-82687318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdef44af1f423f3847cc81cda107f50b4b82c055' => 
    array (
      0 => 'views/admin_delete.tpl',
      1 => 1477780395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7259246355813265d11fbb8-82687318',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5813265d185870_09269287',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5813265d185870_09269287')) {function content_5813265d185870_09269287($_smarty_tpl) {?><form method="post">
    <fieldset>
        <legend>delete video</legend>
            <table>
                <tr>
                    <td><input type="text" name="title"></td>
                    <td><input type="submit" value="remove" name="submit"></td>
                </tr>
            </table>
    </fieldset>
</form><?php }} ?>
