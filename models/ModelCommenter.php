<?php 


class ModelCommenter extends Exception{
    private $pdo;

    function __construct(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=TP_hotel", "root","");
    }
    
}