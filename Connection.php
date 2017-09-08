<?php

class Connection{

    $host = "localhost";
    $database = "db_name_here";
    $user = "your_user_here";
    $pass = "your_pass_here";

    static function getInstance(){
        $conn_str  = "mysql:host=".$this->$host;
        $conn_str .= ";dbname=".$this->$database;

        $db = new PDO($conn_str, $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        return $db;
    }


}


?>
