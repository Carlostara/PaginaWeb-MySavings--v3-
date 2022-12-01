<?php
include("conexion.php");
$con=conectar();

$idcliente=$_POST['idcliente'];
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



$sql="INSERT INTO datosclientes(idcliente, tipoDocumento,numeroDocumento,nombres,estadoCivil,fechaNacimiento, direccion, departamento, ciudad,celular, email) 
      VALUES ('$idcliente','$tipoDocumento','$numeroDocumento','$nombre','$estadoCivil','$fechaNacimiento','$direccion','$departamento','$ciudad','$celular','$email')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: employees.php");
    
}else {
}
?>