<?php
include("abre.php");
$boleto     = $_POST['boleto'];
$pelicula   = $_POST['pelicula'];


$consulta = "INSERT INTO taquilla (boleto, pelicula) VALUES ('$boleto', '$pelicula')";

if($conexion->query($consulta) === TRUE){
header("Location: index.php");
}else{
    echo "Error al insertar datos" .$consulta. "<br>". $conexion->error;
}
$conexion->close();

?>