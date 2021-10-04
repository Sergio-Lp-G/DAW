<?php
$equipo []='Gasol';
$equipo []='Toni';
$equipo []='Pepe';
$equipo []='Fran';
$equipo []='Santos';

foreach($equipo as $nombre){
    echo "$nombre <br>";
}
echo "<br>";
foreach ($equipo as $posicion => $nombre) {
    echo  $posicion."- " . $nombre." <br>";
}