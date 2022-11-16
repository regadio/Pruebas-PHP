<?php
function conexion()
{
    $user = 'root';
    $password = '1234';
    $host = 'localhost';
    $dbName = 'usuarios';

    $db = null;
    try {
        $db = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
    } catch (PDOException $e) {
        echo "Error connecting to database: " . $e->getMessage();
        die();
    }
    return $db;
}
?>