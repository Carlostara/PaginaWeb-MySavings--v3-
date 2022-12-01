<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM datosclientes WHERE idcliente='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="idcliente" value="<?php echo $row['idcliente']  ?>">                         
                                
                                <label for="tipoDocumento" class="form-label">Tipo documento</label>
                                <select name="tipoDocumento" class="form-select form-select-sm" value="<?php echo $row['tipoDocumento']  ?>">>                                
                                <option>CC</option>
                                <option>CE</option>
                                <option>TI</option>
                                </select><br>
                                <input type="text" class="form-control mb-3" name="numeroDocumento" placeholder="numeroDocumento" value="<?php echo $row['numeroDocumento']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="nombres" value="<?php echo $row['nombres']  ?>">
                               
                                <label >estado civil</label>
                                <select name="estadoCivil" class="form-select form-select-sm" value="<?php echo $row['estadoCivil']  ?>">  >
                                <option>Soltero</option>
                                <option>Casado</option>
                                <option>Union libre</option>                               
                                <option>Otro</option>
                                </select><br>                 
                        
                                <input type="date" class="form-control mb-3" name="fechaNacimiento" placeholder="fechaNacimiento" value="<?php echo $row['fechaNacimiento']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="direccion" value="<?php echo $row['direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="departamento" placeholder="departamento" value="<?php echo $row['departamento']  ?>">
                                <input type="text" class="form-control mb-3" name="ciudad" placeholder="ciudad" value="<?php echo $row['ciudad']  ?>">
                                <input type="text" class="form-control mb-3" name="celular" placeholder="celular" value="<?php echo $row['celular']  ?>">                                
                                <input type="text" class="form-control mb-3" name="email" placeholder="email" value="<?php echo $row['email']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>