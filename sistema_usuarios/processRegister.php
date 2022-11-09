<!-- https://code.tutsplus.com/es/tutorials/create-a-php-login-form--cms-33261 -->
<?php
include_once('./database/connection.php');
session_start();

if (isset($_POST['register'])) {
    $username = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['contraseña'];  

    $consulta = $db->prepare("select * from usuario WHERE gmail=:email");
    $consulta->bindParam("email",$email);
    $consulta->execute();

    if ($consulta->rowCount() > 0) {
        echo '<p>The email address is already registered!</p>';
    }

    if ($consulta->rowCount() == 0) {
        $consulta = $db->prepare("INSERT INTO usuario(nombre,contrasena,gmail,rol) VALUES (:username,:contrasena,:email,'0')");
        $consulta->bindParam("username", $username);
        $consulta->bindParam("contrasena", $password);
        $consulta->bindParam("email", $email);
        $result = $consulta->execute();
 
        if ($result) {
            echo '<p class="success">Your registration was successful!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}

?>