<!-- Crea un formulario para enviar los datos de registro de un libro: titulo, autor, editorial y páginas -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Formularios. Ej1</title>
</head>

<body>
    <h2>Libro</h2>
    <form method="POST" action="formAction1.php">
        <label>Titulo</label><input type="text" value="" name="titulo"><br>
        <label>Autor</label><input type="text" value="" name="autor"><br>
        <label>Editorial</label><input type="text" value="" name="editorial"><br>
        <label>Paginas</label><input type="text" value="" name="paginas"><br>
        <input type="submit" value="enviar">
    </form>
</body>


</html>