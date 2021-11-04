<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>

    <form method="POST" action="?method=auth">
        <label for="">Nombre </label><input type="text"  name="name"><br>
        <label for="">Contraseña </label><input type="text"  name="pss"><br>
        <input type="submit" value="enviar">
    </form>

</body>

</html>