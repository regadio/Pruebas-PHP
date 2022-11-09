<?php
 
include('./database/connection.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['nombre'];
    $password = $_POST['contraseña'];
 
    $consulta = $db->prepare("SELECT * FROM usuario WHERE nombre=:username");
    $consulta->bindParam("username", $username);
    $consulta->execute();
 
    $resultados = $consulta->fetch(PDO::FETCH_ASSOC);
 
    if (!$resultados) {
        echo '<p class="error">aaa password combination is wrong!</p>';
    } else {
        if ($resultados['contrasena']==$password) {
            $_SESSION['user_id'] = $resultados['id'];
            header("Location: dash.php");
        } else {
            echo '<p class="error">bbbbb password combination is wrong!</p>';
        }
    }
}
 
?>