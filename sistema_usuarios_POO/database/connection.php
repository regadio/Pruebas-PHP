<?php

$user = 'root';
$password = '1234';
$host = 'localhost';
$dbName = 'usuarios';

$db = null;
try {
    $db = mysqli_connect($host, $user, $password, $dbName);
} catch (PDOException $e) {
    echo "Error connecting to database: " . $e->getMessage();
    die();
}
?>