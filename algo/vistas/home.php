<?php
require_once ('../functions/validacion.php');
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
        <?php echo $_SESSION['user_id'] . " " . $_SESSION['nombre']; ?>!
    </h1>
    <a href="../php/logout.php">cerrar sesion</a>

</body>

</html>