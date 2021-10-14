<?php
    require('Persona.php');
    require('Cliente.php');
    $p1 = new Persona ('Juan', 'García', 18);
    echo "Hola ";
    echo $p1->saludar();
    echo "<br>";
    echo "Soy $p1";
    echo "<br>";
    echo "Mi nombre completo es ".$p1->getNombre()." ".$p1->getApellido();
    echo "<br><br>";
    

    $c1 = new Cliente ('Pedro', 'Lobo', 18, 2000);
    echo "Hola ";
    echo $c1->saludar();
    echo "<br>";
    echo "Soy ".$c1->getNombre();
    echo "<br>";
    echo "Mi nombre completo es ".$c1->getNombre()." ".$c1->getApellido();
    echo "<br>";
    echo $c1->__toString();