<?php
//esta es la vista general de los productos
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de flexacolor</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab10eea0d3.js" crossorigin="anonymous"></script>

</head>
<header>
    <a href="index.php?ruta=usuario">usuarios</a>
</header>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("estas seguro?");
            return respuesta 
        }
    </script>
    <h1 class="text-center p-3">admin de productos</h1>
    <?php
    include "modelo/conexion.php";
    include 'controller/eliminar-producto.php';
    include 'controller/registro-productos.php';
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de nuevos productos</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">precio</label>
                <input type="number" class="form-control" name="precio">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">activo</label>
                <input type="number" class="form-control" name="activo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">categoria</label>
                <input type="number" class="form-control" name="id_categoria">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">tono</label>
                <input type="text" class="form-control" name="tono">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">patron</label>
                <input type="text" class="form-control" name="patron">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">tipo</label>
                <input type="text" class="form-control" name="tipo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">especificaciones</label>
                <input type="text" class="form-control" name="especificaciones">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistro" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">nombre</th>
                        <th scope="col">descripcion</th>
                        <th scope="col">precio</th>
                        <th scope="col">Activo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Tono</th>
                        <th scope="col">patron</th>
                        <th scope="col">tipo</th>
                        <th scope="col">especificaciones</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    $sql = $conexion->query("select * from productos ");
                    while ($datos = $sql->fetch_object()) { ?>

                        <tr>
                            <td><?= $datos->id?></td>
                            <td><?= $datos->nombre?></td>
                            <td><?= $datos->descripcion?></td>
                            <td><?= $datos->precio?></td>
                            <td><?= $datos->activo?></td>
                            <td><?= $datos->id_categoria?></td>
                            <td><?= $datos->tono?></td>
                            <td><?= $datos->patron?></td>
                            <td><?= $datos->tipo?></td>
                            <td><?= $datos->especificaciones?></td>
                            <td>
                                <a href="view/vistamodificarproducto.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar()"href="productos.php?id=<?= $datos->id?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>



                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>