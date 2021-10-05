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

        <?php $valor = $_POST['usuario']; ?>

        <label>Nombre </label><input type="text" value="<?php echo $valor; ?>" name="usuario"><br>
        <input type="submit" value="enviar">
    </form>


    <?php


    if (isset($_POST)  && !empty($_POST)) {

        $valor = '';
        if ($_POST['usuario'] == "usuario" && strlen($_POST['usuario']) > 3) {
            echo "Hola " . $_POST['usuario'] . " Bienvenido.<br>";
            echo "<hr><pre>";echo "Hola " . $_POST['usuario'] . " Bienvenido.<br>";
        } else {
            //$valor = $_POST['nombre'];
            echo  "El nombre " . $_POST['usuario'] . " no es valido. <br>";
        }
    } else {
        echo "Campo NOMBRE obligatorio.<br>";
    }
    ?>

</body>


</html>