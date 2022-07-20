<?php
//este codigo es la vista que se tien al modificar un producto
include '../modelo/conexion.php';
$id = $_GET["id"];
$sql = $conexion->query(" select * from productos where id = $id ");
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
            <h3 class="text-center text-secondary">Editar producto</h3>
            <?php
                include '../controller/modificar-producto.php';
            ?>
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" value="<?= $datos->descripcion?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">precio</label>
                <input type="number" class="form-control" name="precio" value="<?= $datos->precio?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">activo</label>
                <input type="number" class="form-control" name="activo" value="<?= $datos->activo?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">categoria</label>
                <input type="number" class="form-control" name="id_categoria" value="<?= $datos->id_categoria?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">tono</label>
                <input type="text" class="form-control" name="tono" value="<?= $datos->tono?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">patron</label>
                <input type="text" class="form-control" name="patron" value="<?= $datos->patron?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">tipo</label>
                <input type="text" class="form-control" name="tipo" value="<?= $datos->tipo?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">especificaciones</label>
                <input type="text" class="form-control" name="especificaciones" value="<?= $datos->especificaciones?>">
            </div>
            <button type="submit" class="btn btn-primary" name="btnmodifico" value="ok">Modificar</button>
            <a href="index.php?ruta=productos">Ir al inicio</a>

        </form>
    <?php }
    ?>

</body>

</html>