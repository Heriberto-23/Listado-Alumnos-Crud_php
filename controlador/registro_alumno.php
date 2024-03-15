<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["matricula"]) and !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["carrera"]) and !empty($_POST["fotografia"])) {
    
        $matricula=$_POST["matricula"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $carrera=$_POST["carrera"];
        $fotografia=$_POST["fotografia"];

        $sql=$conexion->query("insert into alumnos(matricula,nombre,apellido,carrera,fotografia)values('$matricula','$nombre','$apellido','$carrera','$fotografia') ");
        if ($sql==1) {
            echo'<div class="alert alert-success">Alumno Registrado Correctamente</div>';
        }else{
            echo'<div class="alert alert-danger">Error al Registrar Alumno</div>';
        }

    }else{
        echo'<div class="alert alert-warning">Obligatoriamente debe Llenar los Campos</div>';
    }
}

?>