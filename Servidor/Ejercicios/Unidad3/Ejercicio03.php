<!-- Enviar campo de nombre:
 Sin nombre:saludo.
 Si no existe se vuelve atrás, "campo obligatorio" -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formularios. Ej3</title>
</head>

<body>
    <h2>Usuario</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">

        <label>Nombre </label><input type="text" value="<?php echo $_POST['nombre']; ?>" name="usuario"><br>
        <input type="submit" value="enviar">
    </form>


    <?php

    if ($_POST['usuario'] == "usuario" && $_POST['usuario'] . ob_get_length() > '3'  && !empty($_POST)) {
        //echo "Recibido!! Mira la URL en tu navegador<hr>";
        echo "Hola " . $_POST['nombre'] . " Bienvenido.<br>";
        //var_dump nos puede ayudar a entender lo que hemos recibido
        echo "<hr><pre>";
        //var_dump($_POST);
    } else {
        echo "Campo NOMBRE obligatorio.<br>";
        //$valor=$_POST['nombre'];
        echo $_POST['nombre'] . " no es valido. <br>";
    }
    ?>

</body>


</html>