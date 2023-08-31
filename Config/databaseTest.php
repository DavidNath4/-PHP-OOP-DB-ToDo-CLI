<?php

require_once __DIR__ . "/database.php";

use Config\Database;


try {
    $db = Database::getConnection();
    echo "SUKSES TERKONEKSI DENGAN DATABASE" . PHP_EOL;
    $db = null;
} catch (PDOException $pdoException) {
    echo $pdoException->getMessage() . PHP_EOL;
} catch (Exception $exception) {
    echo $exception->getMessage() . PHP_EOL;
}
