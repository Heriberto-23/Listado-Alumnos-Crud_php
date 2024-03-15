<?php
if (!empty($_GET["matricula"])) {
    $matricula=$_GET["matricula"];
    $sql=$conexion->query(" delete from alumnos where matricula=$matricula ");
    if ($sql==1) {
        echo '<div class="text-center text-primary alert alert-success">Alumno Eliminado Correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al Eliminar Alumno</div>';

    }

}
?>