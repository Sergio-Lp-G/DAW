<?php
$paises= array (
    'España'=>array (
        'moneda'=>'Euro',
        'población'=>50000
    ),
    'Portugal'=>array (
        'moneda'=>'Euro',
        'población'=>10000
    ),
    'Mexico'=>array (
        'moneda'=>'Dolar',
        'población'=>60000
    ),
    'Japon'=>array (
        'moneda'=>'Yen',
        'población'=>90000
    )
);

foreach ($paises as $pais=> $nombre) {
    echo $pais .": <br>";
    foreach ($nombre as $moneda => $poblacion){
        echo  $moneda.": " . $poblacion." <br>";
    }
    echo "<br>";

    
}
    