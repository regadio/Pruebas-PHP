<?php
require_once('../functions/validacion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>¡Bienvenido
        <?php echo $_SESSION['user_id'] . " " . $_SESSION['nombre'] . " El rol es " . $_SESSION['rol']; ?>!
    </h1>
    <a href="../php/logout.php">cerrar sesion</a>
    <?php
    if ($_SESSION['rol'] === 1) {
    ?>
    <a href="../admin/crud.php">Ir a crud</a>
    <?php
    }
    ?>



</body>

</html>