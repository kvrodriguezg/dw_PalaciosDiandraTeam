<?php
//valido que boton sea presionado, y señalo que quiero que haga el boton en la linea 4.
// En la línea 5, valido que, usuario, si o si, ingrese esos datos.

if(!empty($_POST["crearRegistro"])){
   if(!empty($_POST["nombre"]) and !empty($_POST["rut"]) and !empty($_POST["CentroMédico"]) and !empty($_POST["crearRegistro"]))
   //Almaceno los datos ingresados por formularios
    $nombre=$_POST["nombre"];
    $rut=$_POST["rut"];
    $CentroMédico=$_POST["CentroMédico"];
    $CrearRegistro=$_POST["CrearRegistro"];
    
    //conectar con base de datos
    $sql=$link->query("insert into Usuarios(Nombre,Rut,IDCentroMedico) values('$nombre','$rut','$CentroMédico')");
    //validar si quedan registrados los datos
    if ($sql==1) {
        echo '<div class="alert alert - success">Usuario Registrado correctamente</div>';
    } else {
        echo '<div class="alert alert - danger">Error al registrar</div>';
    }
    
}else{
    echo '<div class="alert alert - warning">ALgunos de los campos esta vacio</div>';
}



?>