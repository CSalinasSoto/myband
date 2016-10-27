<?php /* Smarty version Smarty-3.1.18, created on 2016-10-26 13:45:21
         compiled from "views/newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9410395057f228b67ff3b8-41505365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a5f4b5596e58361f517860f8b37beb43c98474' => 
    array (
      0 => 'views/newsarticles.tpl',
      1 => 1477482319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9410395057f228b67ff3b8-41505365',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f228b68688b2_23504903',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f228b68688b2_23504903')) {function content_57f228b68688b2_23504903($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/Applications/MAMP/htdocs/myband/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/myband/libs/plugins/modifier.date_format.php';
?><section>

        <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <article>
        <h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
        <img src="image/<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" alt="">
        <content><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['oneItem']->value['content'],30);?>
</content>
        <date><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date_created'],"%e %B  %Y");?>
</date>
    </article>
        <?php } ?>

</section>

<ul class="niks">
    <li><a href="?action=home&page=1">1</a></li>
    <li><a href="?action=home&page=2">2</a></li>
</ul>


<?php }} ?>
