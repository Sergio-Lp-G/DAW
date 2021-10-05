<!-- Minicuestionario con 5 preguntas tipo test sobre las asignaturas que se imparten en el curso-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formularios. Ej6</title>

</head>

<body>
    <h2>Nombres</h2>

    <form method="POST">

        <h2>Pregunta 1. EIE</h2>
       
        
        <label>Pregunta 2. Inglés </label><br>

        <label>Pregunta 3. Despliegue </label><br>

        <label>Pregunta 4. Cliente</label><br>

        <label>Pregunta 5.  Servidor</label><br>

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