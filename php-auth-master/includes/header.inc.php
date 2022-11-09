<?php require_once 'database/connection.php' ?>
<?php require_once 'helpers.php' ?>

<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Mysql Authentication</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>