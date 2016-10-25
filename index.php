<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

include 'includes/fun.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Me First And The Gimme Gimmes');

// Display template: output html
$templateParser->display('head.tpl');
$templateParser->display('header.tpl');

// Get newsarticles from database

$action = isset($_GET['action'])?$_GET['action']:'home';

switch($action){

    case 'home':
        $page= isset($_GET['page'])?$_GET['page']:1;
        include('model/select_newsarticles.php');
        $templateParser->assign('result', $result);
        $templateParser->display('newsarticles.tpl');
        break;

    case 'about':
        include('model/select_about.php');
        $templateParser->assign('result', $result);
        $templateParser->display('about.tpl');
        break;

    case 'contact':
        include('model/select_contact.php');
        $templateParser->assign('result', $result);
        $templateParser->display('contact.tpl');
}
$footerText = 'made by me for school';

$templateParser->assign('footerString', $footerText);

$templateParser->display('footer.tpl');


