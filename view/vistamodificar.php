<?php
//este codigo es la vista que se tien al modificar un usuario
include '../modelo/conexion.php';
$id = $_GET["id"];
$sql = $conexion->query(" select * from user where Code = $id ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab10eea0d3.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    while ($datos = $sql->fetch_object()) { ?>
        <form class="col-4 p-3 m-auto" method="POST">
            <h3 class="text-center text-secondary">editar usuario</h3>
            <?php
                include '../controller/modificar.php';
            ?>
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="user" value="<?= $datos->user?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                <input type="text" class="form-control" name="password" value="<?= $datos->Password?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">name</label>
                <input type="text" class="form-control" name="name" value="<?= $datos->name?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">lastname</label>
                <input type="text" class="form-control" name="lastname" value="<?= $datos->lastname?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="<?= $datos->email?>">
            </div>

            <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar</button>
            <a href="index.php?ruta=usuario">Ir al inicio</a>

        </form>
    <?php }
    ?>

</body>

</html>