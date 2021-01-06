<?php
session_start();
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DBNAME", "auth_reg");
define("CHARSET", "utf8");
define("SALT", "testMax");

$dsn = "mysql:host=". HOST . ";dbname=" . DBNAME . ";charset=" . CHARSET;
try {
    $dbConn = new PDO($dsn, USER, PASSWORD);
}catch (PDOException $e){
    die('Подключение не правильное ' . $e->getMessage());
}