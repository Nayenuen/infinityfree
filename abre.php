<?php
$conexion = new mysqli("localhost","root","","cines");
if ($conexion) {
    echo "la gestion fue exitosa!!";
}else{
    echo "algo salio mal";
}


?>