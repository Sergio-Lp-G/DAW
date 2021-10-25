<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <p><a href="javascript:history.back()">Atras</a></p>
    <h1>Home</h1>

    <h2>Lista de deseos</h2>

    <?php
    echo "<ul><li>hola</li><li>adios</li></ul>" ;
    

    ?>

    <h2><a href="?method=vaciar">Vaciar lista</a></h2>

    <form method="POST" action="?method=new">
        <label>Nuevo deseo </label><input type="text" value="" name="deseo"><br>
        <input type="submit" value="enviar">
    </form>



    <p>Un saludo</p>
    <p> <a href="/DAW/Servidor/Ejercicios/Unidad3/Ejercicio09/index.php?method=login">Cerrar sesion</a> </p>

</body>

</html>