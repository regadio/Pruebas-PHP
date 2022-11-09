<?php
include_once('./database/connection.php');
session_start();







?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>
    <form action="processRegister.php" method="post" name="signin-form">
        <div class="form-element">
            <label>nombre</label>
            <input type="text" name="nombre" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>contraseña</label>
            <input type="password" name="contraseña" required />
        </div>
        <div class="form-element">
            <label>email</label>
            <input type="email" name="email" required />
        </div>
        <div class="form-element">
            <label>apellido</label>
            <input type="text" name="apellido" required />
        </div>
        <button type="submit" name="register" value="register">Registrar</button>
    </form>

</body>

</html>