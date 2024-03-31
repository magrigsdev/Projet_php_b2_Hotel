<?php 

class ControllerCommenter {

    static function Route($uri)
    {
        if ($uri == '/Projet_php_b2_Hotel/') {
            require_once 'views/viewCommenter.php';
        }
    }
}