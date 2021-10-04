<?php

define('NUMERO1',179);
define('NUMERO2',193);

function primo ($var) {
    $contador=0;
    for($i=0;$i<$var;$i++){
        if($var%$i==0){
            $contador++;
        }
    }
    if($contador==2){
        return true;
    }
}

if(primo('NUMERO2')){
    echo "El numero ".NUMERO2." es primo";
}
else{
    echo "el numero ".NUMERO2." no es primo";
};