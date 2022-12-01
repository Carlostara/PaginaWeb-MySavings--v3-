<?php

include("conexion.php");
$con= conectar();


$id=$_POST['idcliente'];
$tipoDocumento=$_POST['tipoDocumento'];
$numeroDocumento=$_POST['numeroDocumento'];
$nombre=$_POST['nombres'];
$estadoCivil=$_POST['estadoCivil'];
$fechaNacimiento=$_POST['fechaNacimiento'];
$direccion=$_POST['direccion'];
$departamento=$_POST['departamento'];
$ciudad=$_POST['ciudad'];
$celular =$_POST['celular'];
$email=$_POST['email'];

$sql="UPDATE datosclientes SET tipoDocumento='$tipoDocumento', numeroDocumento='$numeroDocumento',nombres='$nombre',estadoCivil='$estadoCivil',fechaNacimiento='$fechaNacimiento',
direccion='$direccion',departamento='$departamento',ciudad='$ciudad',celular='$celular',email='$email' WHERE idcliente='$id' ";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: employees.php");
    }
?>