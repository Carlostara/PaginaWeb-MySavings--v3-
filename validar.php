<?php

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


include('Conexion.php');
$con=conectar();

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($con,$consulta);

$queryRows=mysqli_num_rows($resultado);

if($queryRows){
  
    header("location:CRUD/employees.php");
    
}else{
    ?>
    <?php
    include("index.php");
    
}
mysqli_free_result($resultado);
mysqli_close($con);
