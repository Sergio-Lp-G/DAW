<!-- Minicuestionario con 5 preguntas tipo test sobre las asignaturas que se imparten en el curso-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formularios. Ej6</title>

</head>

<body>
    <h1>Cuestionario</h1>

    <form method="POST">

        <h2>Pregunta 1. EIE</h2><br>


        <h2>Pregunta 2. Inglés </h2><br>


        <h2>Pregunta 3. Despliegue </h2><br>


        <h2>Pregunta 4. Cliente</h2><br>


        <h2>Pregunta 5. Servidor</h2><br>


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