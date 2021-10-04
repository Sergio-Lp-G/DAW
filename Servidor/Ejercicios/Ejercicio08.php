<?php
$equipo = [0 => 'Gasol', 1 => 'Toni', 2 => 'Pepe', 3 => 'Fran', 4 => 'Juan', 5 => 'Santos'];

foreach($equipo as $nombre){
    echo "$nombre <br>";
}
echo "<br>";
foreach ($equipo as $posicion => $nombre) {
    echo  $posicion."- " . $nombre." <br>";
}