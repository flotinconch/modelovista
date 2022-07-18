<?php
    if (!empty($_POST["btnregistro"])) {
        if (!empty($_POST["nombre"]) and !empty($_POST["descripcion"]) and !empty($_POST["precio"]) and !empty($_POST["activo"]) and !empty($_POST["id_categoria"]) and !empty($_POST["tono"]) and !empty($_POST["patron"]) and !empty($_POST["tipo"]) and !empty($_POST["especificaciones"])) {
            $nombre=$_POST["nombre"];
            $descripcion=$_POST["descripcion"];
            $precio=$_POST["precio"];
            $activo=$_POST["activo"];
            $id_categoria=$_POST["id_categoria"];
            $tono=$_POST["tono"];
            $patron=$_POST["patron"];
            $tipo=$_POST["tipo"];
            $especificaciones=$_POST["especificaciones"];

            $sql=$conexion->query(" insert into productos(nombre, descripcion, precio, activo, id_categoria, tono, patron, tipo, especificaciones)values('$nombre', '$descripcion', $precio, $activo, $id_categoria, '$tono', '$patron', '$tipo', '$especificaciones') ");
            if ($sql==1) {
                echo '<div class="alert alert-success">Producto Registrado Correctamente</div>';
            }else{
                echo '<div class="alert alert-danger">El Producto no ha podido ser registrado :(</div>';
            }
        }else{
            echo '<div class="alert alert-warning">Algunos de los campos estan vacios</div>';
        }

    }
?>