<?php

$nombre = "Sergio";
$direccion="Zaragoza";
$mail="mail@mail.com";

//echo 'Nombre: '. $nombre.'; direccion: '.$direccion.'; mail: '.$mail ;



echo "<table border = 1>" ;
   echo  "<tr><th>Nombre</th><th>Dirección</th><th>Mail</th> ";
    echo "</tr>" ;
    echo "<tr><td>$nombre</td><td>$direccion</td><td>$mail</td> ";
    echo "</tr> ";
echo "</table>";

?>