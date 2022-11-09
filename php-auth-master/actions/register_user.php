<?php

if (isset($_POST['submit'])) {

    require_once '../database/connection.php';

    if (!isset($_SESSION)) {
        session_start();
    }

    $first_name = isset($_POST['first_name']) ? trim($_POST['first_name']) : null;
    $last_name = isset($_POST['last_name']) ? trim($_POST['last_name']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $password = isset($_POST['password']) ? trim($_POST['password']) : null;

    $errors = [];
    if (empty($first_name) || is_numeric($first_name) || preg_match("/[0-9]/", $first_name)) {
        $errors['first_name'] = "first name is invalid";
    }

    if (empty($last_name) || is_numeric($first_name) || preg_match("/[0-9]/", $last_name)) {
        $errors['last_name'] = "last name is invalid";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "email is invalid";
    }

    if (empty($password)) {
        $errors['password'] = "password invalid";
    }

    if (count($errors) > 0) {
        $_SESSION['errors'] = $errors;
    } else {
        // TODO: check if user already registered with same address

        $stmtUserFound = $db->prepare("SELECT * FROM users where email = :email");
        $stmtUserFound->bindParam(":email", $email);
        $stmtUserFound->execute();

        $userFound = $stmtUserFound->fetch(PDO::FETCH_ASSOC);
        if ($userFound) {
            $_SESSION['status_error'] = "user already registered with this email";
            header("Location: ../register.php");
            exit();
        }

        // insertar usuario
        $password_hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        $stmt = $db->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)");
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password_hash);

        $success = $stmt->execute();

        if ($success) $_SESSION['status_success'] = 'User registered successfully';
        else $_SESSION['status_error'] = 'error occurred while registering user';
    }
}

header("Location: ../register.php");