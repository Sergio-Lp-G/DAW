<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <?php
    //Incluir los enlaces
    require('views/header.php');
    ?>

    <h1>Login</h1>

    <form method="POST" action="?method=auth">
        <label>Nombre </label><input type="text" value="" name="nombre"><br>
        <label>Contraseña </label><input type="text" value="" name="nombre"><br>
        <input type="submit" value="enviar">
    </form>

</body>

</html>