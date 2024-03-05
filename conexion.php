<?php

function conectar(){

    $user="root";
    $pass="";
    $server="localhost";
    $bd="tienda";
        
    $con=mysqli_connect($server, $user, $pass, $bd) or die ("error de conexion".mysqli_error());

    return $con;
}
?>
