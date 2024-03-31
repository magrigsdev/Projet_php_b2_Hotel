<?php

spl_autoload_register(function($class) {

    $page = $class . '.php';

    if (file_exists("classes/" . $page)) {
        require_once "classes/" . $page;
    }

    elseif( file_exists("controllers/" . $page)){
        require_once "controllers/" . $page;
    } 
    
    elseif (file_exists("model/" . $page)) {
        require_once "model/" . $page;
    }
});

$crt = new ControllerCommenter();

$index = $_SERVER['REQUEST_URI'];
$crt::Route($index);


