<?php /* Smarty version Smarty-3.1.18, created on 2016-11-03 10:17:17
         compiled from "views/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212695315657f574010719f3-50962620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5e3926ed3796d1e0afe13c7f5d97e8996099a6f' => 
    array (
      0 => 'views/about.tpl',
      1 => 1478164344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212695315657f574010719f3-50962620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57f574011108c1_47513393',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57f574011108c1_47513393')) {function content_57f574011108c1_47513393($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/myband/libs/plugins/modifier.date_format.php';
?><section>
    <h1 style="text-align: center">Game Grumps crew</h1>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <div class="wrapper_about">
        <article>
            <h2 ><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['name'];?>
</h2>
            <img src="<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['image'];?>
" class="pasfoto">
            <br>
            <a href='<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['link'];?>
' target="_blank" class="twitterbird">
                    <img src="image/twitter.png" alt="logo twitter" class="mad">
            </a>
            <a href='<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['link2'];?>
' target="_blank" class="twitterbird">
                <img src="image/youtube.png" alt="logo twitter" class="mad">
            </a>
            <br>
            <div class="full">
            <info><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['text'];?>
</info>
            </div>


            <date>Birthday is: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['date'],"%e %B");?>
</date>
        </article>
        </div>
    <?php } ?>
</section>
<?php }} ?>
