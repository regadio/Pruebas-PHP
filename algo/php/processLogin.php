<?php
 
include('../database/connection.php');
$db=conexion();
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['contraseña'];
    
 
    $consulta = $db->prepare("SELECT * FROM usuario WHERE nombre=:username");
    $consulta->bindParam("username", $username);
    $consulta->execute();
 
    $resultados = $consulta->fetch(PDO::FETCH_ASSOC);
 
    if (!$resultados) {
        echo '<p class="error">aaa password combination is wrong!</p>';
    } else {
        if (password_verify($password, $resultados['contrasena'])) {
            $_SESSION['user_id'] = $resultados['id'];
            $_SESSION['nombre'] = $resultados['nombre'];

            header("Location: ../vistas/home.php");
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
 
?>