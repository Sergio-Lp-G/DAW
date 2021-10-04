<?php
$a=0;
$b = 1;
for($i=0;$i<10;$i++){
    $suma=$a+$b;
    echo $suma."<br>";
    $a=$b;      
    $b=$suma;
}

