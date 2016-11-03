<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 10:19:23
         compiled from "views/admin_video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7434963305812f86d17e482-26600190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c20cd6c3ab7d427e0c08d6ed6776ad67c3f522e' => 
    array (
      0 => 'views/admin_video.tpl',
      1 => 1478164752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7434963305812f86d17e482-26600190',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5812f86d1cb915_92156474',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
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


<form method="post">
    <fieldset>
        <legend>delete video</legend>
        <table>
            <tr>
                <td><input type="text" name="title"></td>
                <td><input type="submit" value="remove" name="submit"></td>
            </tr>
        </table>
    </fieldset>
</form>


<fieldset>
    <legend>change about</legend>
    <table >
        <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
            <form method="post">
                <tr>
                    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
" style="display: none" name="id"></td>
                    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['name'];?>
" name="name"></td>
                    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['text'];?>
" name="text"></td>
                    <td><input type="date" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['date'];?>
" name="date"></td>
                    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" name="image"></td>
                    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['link'];?>
" name="link"></td>

                    <td><input type="submit" name="submit"></td>
                </tr>
            </form>

        <?php } ?>

    </table>
</fieldset>


<?php }} ?>
