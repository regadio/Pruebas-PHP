<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
} else {
    //MUESTRA PAGINA NORMAL
}

function comprobaradmin()
{
    if (isset($_SESSION['rol'])) {
        if ($_SESSION['rol'] !== 1) {
            header('Location: ../vistas/menu.php');
            exit;
        } else {
            //MUESTRA PAGINA NORMAL
        }
    }

}
?>