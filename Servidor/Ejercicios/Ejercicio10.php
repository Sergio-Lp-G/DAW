<?php
$equipo = array (
    "base" => "Gasol",
    "escolta" => "Pepe",
    "alero" => "Fran",
    "alapivot"=>"Toni",
    "pivot"=>"Garcia"
);

  

foreach($equipo as $nombre){
    echo "$nombre <br>";
}
echo "<br>";
foreach ($equipo as $posicion => $nombre) {
    echo  $posicion.": " . $nombre." <br>";
}