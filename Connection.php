<?php

class Connection{
    const HOST = "localhost";
    const DATABASE = "database_name";
    const USER = "username";
    const PASS = "password";

    public static function getInstance(){

        $conn_str  = "mysql:host=".self::HOST.";";
        $conn_str .= "dbname=".self::DATABASE.";";
        $conn_str .= "charset=utf8";

        $db = new PDO($conn_str, self::USER, self::PASS);

        var_dump($db);
        return $db;
    }
}


?>
