<?php
$a = 5;
$b = 10;
$c = 3;

echo $a . " <br>" . $b . " <br>" . $c . " <br>";

function discriminante($a, $b, $c)
{
    $discriminante = (pow($b, 2)) - (4 * $a * $c);
    //echo $discriminante." <br>";
    return $discriminante;
}
discriminante($a, $b, $c);

function segundoGrado($a, $b, $c)
{
    if (discriminante($a, $b, $c) > 0) {
        $solpos = (-$b + sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);
        $solneg = (-$b - sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);
        //echo $solpos." <br>".$solneg;
        $resultados = array(
            "x1" => $solpos,
            "x2" => $solneg
        );
        return $resultados;
    } else {
        $nosol = "FALSE";
        //echo $nosol." <br>";
        $resultados = array(
            "Resultado" => $nosol
        );
        return $resultados;
    }
}
foreach (segundoGrado($a, $b, $c) as $resultados => $nombre) {
    echo  $resultados . ": " . $nombre . " <br>";
}
