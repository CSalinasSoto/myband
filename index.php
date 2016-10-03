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
include('model/select_newsarticles.php');

// Show newsarticles 'old style' => refactor to template system.
//include('views/newsarticles.php');


$templateParser->assign('result', $result);
$templateParser->display('newsarticles.tpl');

$footerText = 'made by me for school';

$templateParser->assign('footerString', $footerText);

$templateParser->display('footer.tpl');
