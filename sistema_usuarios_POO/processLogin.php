<?php
 
include('./database/connection.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['nombre'];
    $password = $_POST['contraseña'];
 
    $peticion ="SELECT * FROM usuario WHERE nombre=$username";
    $consulta = mysqli_query($db,$peticion);
    $resultado = mysqli_fetch_array($consulta);

 
    if (!$resultado) {
        echo '<p class="error">aaa password combination is wrong!</p>';
    } else {
        if ($resultado['contrasena']==$password) {
            $_SESSION['user_id'] = $resultado['id'];
            header("Location: dash.php");
        } else {
            echo '<p class="error">bbbbb password combination is wrong!</p>';
        }
    }
}
 
?>