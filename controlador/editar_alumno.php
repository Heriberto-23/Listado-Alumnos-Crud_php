<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["matricula"]) and !empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["carrera"]) and !empty($_POST["fotografia"])) {
        $matricula=$_POST["matricula"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $carrera=$_POST["carrera"];
        $fotografia=$_POST["fotografia"];
        $sql=$conexion->query(" update alumnos set nombre='$nombre', apellido='$apellido', carrera='$carrera', fotografia='$fotografia' where matricula=$matricula ");
        if($sql==1){
            header("location:index.php");
        } else {
            echo '<div class=" alert alert-danger">Error al Editar Alumno</div>';
        }

    }else{
        echo '<div class=" alert alert-warning">Necesita Llenar los Campos</div>';
    }
}

?>