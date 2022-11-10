<!-- https://code.tutsplus.com/es/tutorials/create-a-php-login-form--cms-33261 -->
<?php
include_once('./database/connection.php');
session_start();

if (isset($_POST['register'])) {
    $username = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['contraseña'];  
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $rol=2;

    $peticion = "select * from usuario WHERE gmail='$email'";
    $consulta = mysqli_query($db,$peticion) or die('Query error');
    $resultado = mysqli_fetch_array($consulta);

    if (count($resultado) > 0) {
        echo '<p>The email address is already registered!</p>';
    }

    if (mysqli_num_rows($resultado) == 0) {
        $consulta = mysqli_query($db, "INSERT INTO usuario(nombre,contrasena,gmail,rol) VALUES ($username,$contrasena,$email,$rol)");
        $resultado = mysqli_fetch_array($consulta);
 
        if ($resultado) {
            header("Location: login.php");
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}

?>