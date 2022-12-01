<?php
echo "<h4>Variables Recibidas</h4>";
    foreach($_POST as $campo => $valor){
        echo "<BR>".$campo." = ".$valor;
    }

    echo "<br>";
    echo "<pre>"; print_r($_POST) ;  echo "</pre>";

?> 