<?php
include('./database/connection.php');
require_once('validacion.php');

if (isset($_POST['insertarpeli'])) {
    $nombre_peli = $_POST['nombre_peli'];
    $imagen_peli = $_POST['imagen_peli'];

    $consulta = $db->prepare("INSERT INTO pelis(nombre_peli,imagen_peli) VALUES (:a, :b)");
    $consulta->bindParam("a", $nombre_peli);
    $consulta->bindParam("b", $imagen_peli);
    $result = $consulta->execute();
    if ($result) {
        header("Location: dash.php");
    }else{
        echo "gg";
    }
}

?>