<?php
class OBJElementosFRM {
   
    function CrearLista($Lista, $nombre)
    {
        
        $label='<label for="tipoDocumento" class="form-label">Tipo de documento</label>';
        $cadenaInicio='<select name="'.$nombre.'" class="form-select form-select-sm">';
      
      
        $opcion = " ";
        foreach ($Lista as $valor){
            $opcion = "<option>".$valor."</option>".$opcion;
        }
        $cadenaFinal = "</select>";
        $listaSelect = $label.$cadenaInicio.$opcion.$cadenaFinal;
        return $listaSelect;
    }
    function CrearLista2($Lista, $nombre)
    {
        $label='<label for="Estado Civil" class="form-label">Estado civil</label>';
        $cadenaInicio='<select name="'.$nombre.'" class="form-select form-select-sm">'; 
        
        $opcion = " ";
        foreach ($Lista as $valor){
            $opcion = "<option>".$valor."</option>".$opcion;
        }
        $cadenaFinal = "</select>";
        $listaSelect =$label. $cadenaInicio.$opcion.$cadenaFinal;
        return $listaSelect;
    }
    function GenerarFormulario()
    {
       
        
        $cadenaFinal = '</fieldset>';
        $listaLabelBox = "";
        $contenido = '
        <br>
        <label for="cedula" class="form-label">Ingrese numero de documento</label>
        <input type="number" id="cedula" name="cedula" class="form-control" required> <br>
        
        <label for="name" class="form-label">Nombres Completos</label>
        <input id="name" name="name" class="form-control required> 
        <label for="fechaNacimiento" class="form-label">Fecha Nacimiento</label>
        <input type="date" id="fechaNacimiento" fechaNacimiento="fechaNacimiento" class="form-control" required> 
        <div class="invalid-feedback">
       
        </div>
        <label for="cel" class="form-label">Num de celular</label>
        <input type="tel" id="cel" name="cel" class="form-control" required> 
        <label for="direccion" class="form-label">Direccion </label>
        <input id="direccion" name="direccion" class="form-control" required> 
        <label for="departamento" class="form-label">Departamento</label>
        <input id="departamento" name="departamento" class="form-control" required> 
        <label for="ciudad" class="form-label">Ciudad</label>
        <input id="ciudad" name="ciudad" class="form-control" required> 
        
        <label for="email" class="form-label">email</label>
        <input type="email" id="email" name="email" placeholder="name@example.com" class="form-control" required> 
        <div class="invalid-feedback">
        Por favor ingrese un email valido
        </div>
        ';
        
        return $contenido.$cadenaFinal;
    }
    
    
}
?>