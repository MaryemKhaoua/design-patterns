<?php

class DataBase{

private  static $instance;

private function __construct(){
  
    $this->connection = mysqli_connect("localhost", "username", "password", "database");
}

public static function singleton(){
    if(self::$instance===NULL){
        self::$instance = new self();
    }
    return self::$instance;
}
public function connexion()
{
    return $this->connection;
}
}

$db = DataBase::singleton();
$connection = $db->connexion();