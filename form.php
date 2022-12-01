<!DOCTYPE html>
<html lang="es">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:opsz,wght@8..30,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:opsz,wght@8..30,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&family=Ms+Madi&family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/204035_G2_Carlos_tarazona/assets/estilo.css">

    <link href="https://fonts.googleapis.com/css2?family=Piazzolla:wght@300&display=swap" rel="stylesheet">
    <title>Banco mysaving</title>
 </head>
<body>



    <div class="container">
        <!-- container -->

        <div class="header">
            <!-- header -->
            <div class="nav__bar1">
                <nav>
                    <a href="index.php">inicio</a>
                    <a href="personas.php">Personas</a>
                    <a href="empresa.php">empresa</a>
                    <a href="atencion.php">atención al cliente</a>
                    <a href="form.php">Simulador Creditos </a>
                    <a href="Formulario_contacto.php">Formulario contactos</a>
                    <a href="login.php">Modulo Administrar</a>


                </nav>
            </div>
            <div>
                <img class="logo1" src="imagenes/meza verde.png">
                <h1 class="texto">"Confianza en nuestras manos"</h1>
            </div>
        </div>
     <form action="Script.php" method="POST">
        <h2 class="h2_form">simulador de prestamo</h2>
        <fieldset>

            <legend>ingresa datos</legend>

            <label for="valorprestamo"> valor de prestamo </label>
            <input type="number" name="valorprestamo" > <br> <br>

            <label>numero de cuotas</label>
            <select name="cuotas">
                <option value="6">6</option>
                <option value="12">12</option>
                <option value="18">18</option>
                <option value="24">24</option>
                <option value="36">36</option>
                <option value="48">48</option>
                <option value="60">60</option>
            </select>

            <br>
            <br>
            <input type="submit" name="cotizar" value="cotizar">


        </fieldset>
        <br>
     </form>
     <footer class="footer">


     <h3>Siguenos en nuestras redes sociales</h3>

     <a href="#" class="fa fa-facebook"></a>
     <a href="#" class="fa fa-twitter"></a>
     <a href="#" class="fa fa-instagram"></a>
     <a href="#" class="fa fa-youtube"></a>

     <h3 class="derechos">© 2022. My saving bank. Todos los derechos reservados</h3>


     </footer>

    </div>








</body>

</html>
 
     
    
