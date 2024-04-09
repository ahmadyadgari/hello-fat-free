<?php

// 328/Week2/hello-fat-free/index.php
// This is my CONTROLLER!

// Turn on error reporting
ini-set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Instantiate the F3 Base Class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /' , function(){
    echo '<h1>Hello Fat-Free<h/>';
});

// Run Fat-Free
$f3->run();