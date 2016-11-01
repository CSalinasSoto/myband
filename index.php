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
$templateParser->assign('title', 'Game Grumps');

// Display template: output html
$templateParser->display('head.tpl');
$templateParser->display('header.tpl');

// Get newsarticles from database

$action = isset($_GET['action'])?$_GET['action']:'home';

switch($action){

    case 'home':
        $page= isset($_GET['page'])?$_GET['page']:1;
        include('model/select_home.php');
        include ('model/get_nr_items.php');
        $nr_of_pages = ceil($total_nr_home/ITEM_PAGE);
        $templateParser->assign('nr_of_pages', $nr_of_pages);
        $templateParser->assign('result', $result);
        $templateParser->display('home.tpl');
        break;

    case 'about':
        include('model/select_about.php');
        $templateParser->assign('result', $result);
        $templateParser->display('about.tpl');
        break;

    case 'contact':
        include('model/select_contact.php');
//        $templateParser->assign('result', $result);
        $templateParser->display('contact.tpl');
        break;
    case 'live':
        include('model/select_live.php');
        $templateParser->assign('result', $result);
        $templateParser->display('live.tpl');
        break;
    case 'admin_video':
        include('model/admin_video.php');
        $templateParser->display('admin_video.tpl');
        break;
    case 'admin_delete':
        include ('model/admin_delete.php');
        $templateParser->display('admin_delete.tpl');
        break;
    case 'admin_change':
        include ('model/select_about.php');
        include ('model/admin_change.php');
        $templateParser->assign('result', $result);
        $templateParser->display('admin_change.tpl');
        break;

    default:
        $templateParser->display('default.tpl');


}
$footerText = 'made by me for school';

$templateParser->assign('footerString', $footerText);

$templateParser->display('footer.tpl');


