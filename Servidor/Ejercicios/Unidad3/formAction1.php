<?php



//isset comprueba si una variable está definida y no es null
//empty comprueba si una variable contiene algún valor distinto de 0 o false
if(isset($_POST) && !empty($_POST)){
    echo "Recibido!! Mira la URL en tu navegador<hr>";
    echo "Libro ".$_POST['titulo'].  " del autor ". $_POST['autor']." por la editorial ". $_POST['editorial']. " con ". $_POST['paginas']." páginas.<br>";
    //var_dump nos puede ayudar a entender lo que hemos recibido
    echo "<hr><pre>";
    var_dump($_POST);
}
 else {
     echo "No hemos recibido nada!";
}
