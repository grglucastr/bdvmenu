<?php

class Connection{
    const HOST = "localhost";
    const DATABASE = "bdvmenu";
    const USER = "root";
    const PASS = "senha123";

    public static function getInstance(){

        $conn_str  = "mysql:host=".self::HOST.";";
        $conn_str .= "dbname=".self::DATABASE.";";
        $conn_str .= "charset=utf8";

        $db = new PDO($conn_str, self::USER, self::PASS);
        return $db;
    }
}


?>
