<?php
$host = "127.0.0.1";
$usuario = "root";
$clave = "Admin";
$bd = "Monarca";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);

if(!$conexion){
    die("conexion fallo: " . mysqli_connect_error());

}else{
    echo "conexion con exito";
}

?>

