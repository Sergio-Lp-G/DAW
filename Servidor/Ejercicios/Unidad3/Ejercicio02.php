<!-- Enviar campo de nombre:
 Sin nombre:saludo.
 Si no existe se vuelve atrás, "campo obligatorio" -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formularios. Ej2</title>
</head>

<body>
    <h2>Usuario</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <label>Nombre </label><input type="text" value="" name="nombre"><br>
        <input type="submit" value="enviar">
    </form>


    <?php
    if (isset($_POST) && !empty($_POST)) {
        echo "Recibido!! Mira la URL en tu navegador<hr>";
        echo "Hola " . $_POST['nombre'] . " Bienvenido.<br>";
        //var_dump nos puede ayudar a entender lo que hemos recibido
        echo "<hr><pre>";
        //var_dump($_POST);
    } else {
        echo "Campo NOMBRE obligatorio";
    }
    ?>

</body>


</html>