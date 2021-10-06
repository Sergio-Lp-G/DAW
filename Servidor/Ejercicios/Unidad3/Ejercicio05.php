<!-- Enviar un array de 3 nombres. usar todos los inputs con (name="nombres[]")-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formularios. Ej5</title>

</head>

<body>
    <h2>Nombres</h2>

    <form method="POST">

        <label>Nombre 1. </label><input type="text" value="" name="nombres[]"><br>
        <label>Nombre 2. </label><input type="text" value="" name="nombres[]"><br>
        <label>Nombre 3. </label><input type="text" value="" name="nombres[]"><br>
        <input type="submit" value="enviar">
    </form>


    <?php
    if (!empty($_POST['nombres']) && is_array($_POST['nombres'])) {

        foreach ($_POST['nombres'] as $nombres) {
            echo $nombres . " <br>";
        }
    } else {
        echo "error";
    }
    ?>
</body>

</html>