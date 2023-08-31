<?php

namespace Config {

    use PDO;

    class Database

    {
        static function getConnection(): PDO
        {
            $host = "localhost";
            $port = 3306;
            $database = "php_todo_list";
            $user = "root";
            $pass = "";
            return new PDO("mysql:host=$host;port=$port;dbname=$database", $user, $pass);
        }
    }
}
