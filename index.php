<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require necessary files
require_once('vendor/autoload.php');
//require('classes/pet.php');

//Instantiate Fat-Free
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function($f3) {

    //echo "<h1>Week 7:  OOP</h1>";
    $mypet = new Pet("Rufus", "pink");
    $f3->set('pet', $mypet);

    $mydog = new Dog("Dodo", "black");
    $f3->set('dog', $mydog);
    //var_dump($mypet);

    $view = new Template();
    echo $view->render('views/home.html');
});

//Run Fat-Free
$f3->run();