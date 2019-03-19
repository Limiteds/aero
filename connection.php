<?php 
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $port = "3306";
    try {
        $db = new PDO("mysql:host=$server_name; port=$port; dbname=aero", $user_name, $password);
    }
    catch (PDOException $e) {
        echo "Connect failed:" . $e->getMessage();
    }
