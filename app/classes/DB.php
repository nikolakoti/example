<?php

class DB {

    private static $instance;

    public static function getInstance() {

        if (!isset(self::$instance)) {

            return self::$instance = new DB();
        }

        return self::$instance;
    }

    private function __construct() {

        $host = Config::get('mysql/db_host');
        $db = Config::get('mysql/db_name');
        $username = Config::get('mysql/db_username');
        $password = Config::get('mysql/db_pass');

        try {

            $link = new PDO("mysql:host=$host;dbname=$db", $username, $password);

            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            echo "Connected successfully";
        
            
        } catch (PDOException $e) {

            echo "Connection failed: " . $e->getMessage();
        }
    }

}
