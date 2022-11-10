<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">

</head>

<body>
    <form action="processRegister.php" method="post" name="signin-form">
        <div class="">
            <label>nombre</label>
            <input type="text" name="nombre" required />
        </div>
        <div class="">
            <label>email</label>
            <input type="email" name="email" required />
        </div>
        <div class="">
            <label>contraseña</label>
            <input type="password" name="contraseña" required />
        </div>
        <div class="">
            <label>Vuelve a escribir la contraseña</label>
            <input type="password" name="contraseña2" required />
        </div>
        <button type="submit" name="register" value="register">Registrarse</button>
    </form>

</body>

</html>