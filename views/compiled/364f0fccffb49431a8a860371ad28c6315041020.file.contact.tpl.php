<?php /* Smarty version Smarty-3.1.18, created on 2016-10-24 10:49:00
         compiled from "views/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1401159859580db726a56d63-62089716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '364f0fccffb49431a8a860371ad28c6315041020' => 
    array (
      0 => 'views/contact.tpl',
      1 => 1477298939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1401159859580db726a56d63-62089716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580db726ace9c8_56731296',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580db726ace9c8_56731296')) {function content_580db726ace9c8_56731296($_smarty_tpl) {?><head>
    <link rel="stylesheet" href="css/contact.css">
</head>
<?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
<h1><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['title'];?>
</h1>
<form class="cf">
    <div class="half left cf">
        <input type="text" id="input-name" placeholder="Name">
        <input type="email" id="input-email" placeholder="Email address">
        <input type="text" id="input-subject" placeholder="Subject">
    </div>
    <div class="half right cf">
        <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
    </div>
    <input type="submit" value="Submit" id="input-submit">
</form>
<?php } ?>



    
        
        
            
            
        
        
            
            
        
    


        

<?php }} ?>
