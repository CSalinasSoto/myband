<?php /* Smarty version Smarty-3.1.18, created on 2016-10-31 09:15:46
         compiled from "views/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1401159859580db726a56d63-62089716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '364f0fccffb49431a8a860371ad28c6315041020' => 
    array (
      0 => 'views/contact.tpl',
      1 => 1477901744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1401159859580db726a56d63-62089716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_580db726ace9c8_56731296',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_580db726ace9c8_56731296')) {function content_580db726ace9c8_56731296($_smarty_tpl) {?><head>
    <link rel="stylesheet" href="css/contact.css">
</head>

<h1>Contact</h1>
<form class="cf" method="post">
    <div class="half left cf">
        <input type="text" id="input-name" placeholder="Name" name="name" required>
        <input type="email" id="input-email" placeholder="Email address"  name="email" required>
        <input type="text" id="input-subject" placeholder="Subject" name="subject" required>
    </div>
    <div class="half right cf">
        <textarea name="message" type="text" id="input-message" placeholder="Message" required></textarea>
    </div>
    <input type="submit" value="Submit" id="input-submit">
</form>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9739.465954656873!2d4.856629863302593!3d52.39097058687136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5dffd675d740eddb!2sMediacollege+Amsterdam+hoofdgebouw!5e0!3m2!1snl!2snl!4v1477406323410" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<?php }} ?>
