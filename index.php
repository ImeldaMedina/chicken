<?php
/*
 * Imelda Medina
 * 1/15/2020
 * 328/chicken.index.php
 */
//Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);
//Require autoload file
require("vendor/autoload.php");
//Instantiate F3
$f3 = Base:: instance();

//define a default route
$f3->route('GET /', function(){
    $view = new Template();
    echo $view->render('views/all-about-chickens.html');
});
//Run F3
$f3->run();