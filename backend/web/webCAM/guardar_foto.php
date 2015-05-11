<?php

$jpg = base64_decode($_POST["data"]);

$file = fopen("webCAM.jpg", "w");

if($file){

        // Debe tener permiso de escritura.

    fwrite($file, $jpg);

    fclose($file);

    echo "ok";

}

else{

    echo "Error al abrir archivo";

}



?>

 