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

    <ul>
        <?php
        if(count($deseo)){
            foreach($deseo as $id => $lista){
                echo "<li>$id: ".$lista.' <a href="?method=delete&id='.$id.' ">Borrar</a> </li>';

            }
        }
        


        ?>
    </ul>

    <h2><a href="?method=empty">Vaciar lista</a></h2>

    <form method="POST" action="?method=new">
        <label>Nuevo deseo </label><input type="text" value="" name="new"><br>
        <input type="submit" value="enviar">
    </form>



    <p>Un saludo</p>
    <p> <a href="?method=logout">Cerrar sesion</a> </p>

</body>

</html>