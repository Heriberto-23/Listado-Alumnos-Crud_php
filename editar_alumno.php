<?php
include "modelo/conexion.php";
$matricula=$_GET["matricula"];
$sql=$conexion->query(" select * from alumnos where matricula=$matricula ");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center alert alert-primary">Editar Alumnos</h3>
        <input type="hidden" name="matricula" value="<?= $_GET["matricula"]?>">
        <?php
        include "controlador/editar_alumno.php";
        while($datos = $sql->fetch_object()){ ?>
        <div class="mb-1">
            <label for="matricula" class="form-label">Matricula</label>
            <input type="text" class="form-control" id="matricula" name="matricula" value="<?= $datos->Matricula ?>">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $datos->Nombre ?>">
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $datos->Apellido ?>">
        </div>
        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera</label>
            <input type="text" class="form-control" id="carrera" name="carrera" value="<?= $datos->Carrera ?>">
        </div>
        <div class="mb-3">
            <label for="fotografia" class="form-label">Fotografia</label>
            <input type="text" class="form-control" id="fotografia" name="fotografia" value="<?= $datos->Fotografia ?>">
        </div>

       <?php }

        ?>
        

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="OK">Editar Datos</button>
    </form>
</body>

</html>