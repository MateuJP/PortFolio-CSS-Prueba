<?php

$db ="";

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'blog';
$db_port=3306;
$db_Soket='/Applications/MAMP/tmp/mysql/mysql.sock';

$db=new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
    $db_port,
    $db_Soket
);

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}

