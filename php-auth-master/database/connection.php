<?php

$user = 'root';
$password = '';
$host = 'localhost';
$dbName = 'php_auth';

$db = null;
try {
    $db = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
} catch (PDOException $e) {
    echo "Error connecting to database: ". $e->getMessage();
    die();
}