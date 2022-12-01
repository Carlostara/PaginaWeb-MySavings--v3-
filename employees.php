<?php
include("conexion.php");
$con = conectar();

$where = "";
if (!empty($_POST)) {
    $valor = $_POST['campo'];
    if (!empty($valor)) {
        $where = "WHERE numeroDocumento LIKE '$valor'";
    }
}

$sql = "SELECT *  FROM datosclientes $where";
$query = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> pagina employees</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>


<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">        
        <li class="nav-item">
          <a class="nav-link" href="pdf/generapdf.php"target="_blank">generarpdf</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../login.php">cerrar sesion</a>
        </li>
      </ul>


                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method='POST' class="d-flex" role="search">

                        <input class="form-control me-2" name="campo" type="search" placeholder="buscar documento" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </div>
    </nav>
    <div class="container lg-12">



        <h2 class="text-center  text-black">Modulo Administrar clientes</h2><br>


        <div class="row">

            <div class="col-md-2">

                <h4>Ingrese datos</h4>
                <form action="insert.php" method="POST">

                    <input type="text" class="form-control mb-3" name="idcliente" placeholder="id">
                    <label for="tipoDocumento" class="form-label">Tipo documento</label>
                    <select name="tipoDocumento" class="form-select form-select-sm">
                        <option>CC</option>
                        <option>CE</option>
                        <option>TI</option>
                    </select><br>
                    <input type="text" class="form-control mb-3" name="numeroDocumento" placeholder="numero de Documento">

                    <input type="text" class="form-control mb-3" name="nombres" placeholder="nombres">
                    <label>estado civil</label>
                    <select name="estadoCivil" class="form-select form-select-sm">
                        <option>Soltero</option>
                        <option>Casado</option>
                        <option>Union libre</option>
                        <option>Otro</option>
                    </select><br>

                    <label>Fecha de nacimiento</label>
                    <input type="date" class="form-control mb-3" name="fechaNacimiento" placeholder="fecha de nacimiento">
                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                    <input type="text" class="form-control mb-3" name="departamento" placeholder="Departamento">
                    <input type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad">
                    <input type="text" class="form-control mb-3" name="celular" placeholder="numero de celular">

                    <input type="text" class="form-control mb-3" name="email" placeholder="Email">



                    <input type="submit" class="btn btn-primary">
                </form>
            </div>


            <div class="col-md-8">

                <table class="table">
                    <thead class="table-info table-striped">
                        <tr>
                            <th>id</th>
                            <th>tipo documento</th>
                            <th>num Documento</th>
                            <th>nombres</th>
                            <th>estado civil</th>
                            <th>fecha de nacimiento</th>
                            <th>Dirección</th>
                            <th>Departamento</th>
                            <th>Ciudad</th>
                            <th>celular </th>
                            <th>Email</th>
                            <th></th>
                            <th></th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?php echo $row['idcliente'] ?></td>
                                <td><?php echo $row['tipoDocumento'] ?></td>
                                <td><?php echo $row['numeroDocumento'] ?></td>
                                <td><?php echo $row['nombres'] ?></td>
                                <td><?php echo $row['estadoCivil'] ?></td>
                                <td><?php echo $row['fechaNacimiento'] ?></td>
                                <td><?php echo $row['direccion'] ?></td>
                                <td><?php echo $row['departamento'] ?></td>
                                <td><?php echo $row['ciudad'] ?></td>
                                <td><?php echo $row['celular'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><a href="actualizar.php?id=<?php echo $row['idcliente'] ?>" class="btn btn-info">Editar</a></td>
                                <td><a href="delete.php?id=<?php echo $row['idcliente'] ?>" class="btn btn-danger">Eliminar</a></td>


                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>