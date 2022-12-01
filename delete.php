<?php

include("Conexion.php");
$con=conectar();

$idcliente = $_GET['id'];

$sql = "DELETE  FROM datosclientes  WHERE idcliente ='$idcliente'";

$query = mysqli_query($con,$sql);

if($query){

    Header("location: employees.php");

    
}




?>