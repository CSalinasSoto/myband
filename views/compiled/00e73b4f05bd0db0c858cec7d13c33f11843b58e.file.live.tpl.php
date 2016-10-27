<?php /* Smarty version Smarty-3.1.18, created on 2016-10-26 23:21:18
         compiled from "views/live.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92939704580fa755bdb895-22329922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00e73b4f05bd0db0c858cec7d13c33f11843b58e' => 
    array (
      0 => 'views/live.tpl',
      1 => 1477516865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '92939704580fa755bdb895-22329922',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580fa755c35855_85721783',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580fa755c35855_85721783')) {function content_580fa755c35855_85721783($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/myband/libs/plugins/modifier.date_format.php';
?>
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
    <div class="wrap">

<div class="datum" style="text-align: center ">
    <div class="datum_text" style="top: 3px; transform-origin: 32px 26.5px 0px;">
        <p><span class="datum_time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['oneItem']->value['day'],"%b %e %a");?>
</span></p>
    </div>
</div>
    <div class="info">
        <div class="info_text" style="top: 3px; transform-origin: 32px 26.5px 0px;">
            <p><span><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['theater'];?>
</span></p>
            <p class="info_time"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['time'];?>
</p>

        </div>
    </div>
        <div class="live" >
            <div class="live_text" style="top: 3px; transform-origin: 32px 26.5px 0px;">
                <p><span class="live_game" ">GAME GRUMPS LIVE!</span></p>
                <p><span style="margin-left: 240px; margin-top: -20px"><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['ticket'];?>
</span></p>
                <a href="" target="_blank" ><input type="button" value="Buy tickets" class="button"></a>
            </div>
        </div>
</div>
            <?php } ?>


<?php }} ?>
