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
        echo "Hola " . $_POST['nombre'] . " Bienvenido.<br>";
        echo "<hr><pre>";
    } else {
        echo "Campo NOMBRE obligatorio";
    }
    ?>

</body>


</html>