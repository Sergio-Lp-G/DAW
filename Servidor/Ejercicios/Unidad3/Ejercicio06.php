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
        <label for="pregunta1">Profesor que imparte esta asignatura.</label>
        <select name="pregunta1" id="pregunta1">
            <option value="0">Fran</option>
            <option value="1">Jose Miguel</option>
            <option value="0">Elena</option>
            <option value="0">Sandra</option>
        </select>
        <br>
        <h2>Pregunta 2. Inglés </h2><br>
        <label for="pregunta1">Profesor que imparte esta asignatura.</label>
        <select name="pregunta1" id="pregunta1">
            <option value="0">Fran</option>
            <option value="1">Jose Miguel</option>
            <option value="0">Elena</option>
            <option value="0">Sandra</option>
        </select>
        <br>

        <h2>Pregunta 3. Despliegue </h2><br>
        <label for="pregunta1">Profesor que imparte esta asignatura.</label>
        <select name="pregunta1" id="pregunta1">
            <option value="0">Fran</option>
            <option value="1">Jose Miguel</option>
            <option value="0">Elena</option>
            <option value="0">Sandra</option>
        </select>
        <br>

        <h2>Pregunta 4. Cliente</h2><br>
        <label for="pregunta1">Profesor que imparte esta asignatura.</label>
        <select name="pregunta1" id="pregunta1">
            <option value="0">Fran</option>
            <option value="1">Jose Miguel</option>
            <option value="0">Elena</option>
            <option value="0">Sandra</option>
        </select>
        <br>

        <h2>Pregunta 5. Servidor</h2><br>
        <label for="pregunta1">Profesor que imparte esta asignatura.</label>
        <select name="pregunta1" id="pregunta1">
            <option value="0">Fran</option>
            <option value="1">Jose Miguel</option>
            <option value="0">Elena</option>
            <option value="0">Sandra</option>
        </select>
        <br>

        <input type="submit" value="enviar">
    </form>


    <?php

    if (!empty($_POST) && isset($_POST)) {
        $contador=0;
        foreach ($_POST as $_POST['name'] => $nombre) {
            # code...
        }

        if($_POST['pregunta1']){}
    }
    ?>
</body>

</html>