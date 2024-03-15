<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD EN PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1859d509a8.js" crossorigin="anonymous"></script>
</head>

<body>
    <script>
        function eliminar(){
            var respuesta=confirm("Estas seguro que deseas eliminar?");
            return respuesta
        }
    </script>
    <div class="container">
        <h1 class="text-center p-3 alert alert-primary">LISTADO DE ALUMNOS</h1> <br>
        <?php
        include "modelo/conexion.php";
        include "controlador/eliminar_alumno.php";
        ?>

        <div class="row">
            <form class="col-4 p-2" method="POST">
                <h3 class="text-center alert alert-info">Registro de alumnos</h3>
                <?php
                include "controlador/registro_alumno.php";
                ?>
                <div class="mb-3">
                    <label for="matricula" class="form-label">Matricula</label>
                    <input type="text" class="form-control" id="matricula" name="matricula">
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido">
                </div>
                <div class="mb-3">
                    <label for="carrera" class="form-label">Carrera</label>
                    <input type="text" class="form-control" id="carrera" name="carrera">
                </div>
                <div class="mb-3">
                    <label for="fotografia" class="form-label">Fotografia</label>
                    <input type="text" class="form-control" id="fotografia" name="fotografia">
                </div>

                <button type="submit" class="btn btn-primary" name="btnregistrar" value="OK">Registrar</button>
            </form>

            <div class="col-8 p-2">
                <table class="table table-info table-striped">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col">Matricula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Carrera</th>
                            <th scope="col">Fotografia</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "modelo/conexion.php";
                        $sql=$conexion->query(" select * from alumnos ");
                        while($datos=$sql->fetch_object()){ ?>
                         <tr>
                            <td><?= $datos->Matricula ?></td>
                            <td><?= $datos->Nombre ?></td>
                            <td><?= $datos->Apellido ?></td>
                            <td><?= $datos->Carrera ?></td>
                            <td><?= $datos->Fotografia ?></td>
                            <td>
                                <a href="editar_alumno.php?matricula=<?= $datos->Matricula ?>" class="btn btn-small btn-warning"><i class="fa fa-file-pen"></i></a>
                                <a onclick="return eliminar()" href="index.php?matricula=<?= $datos->Matricula ?>" class="btn btn-small btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>

                       <?php }
                        ?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>


