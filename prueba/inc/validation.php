<?php
session_start();
 
if(!isset($_SESSION['user_id'])){
    header('Location: ../sesion/login.php');
    exit;
} else {
    //MUESTRA PAGINA NORMAL
}
?>