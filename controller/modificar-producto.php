<?php
//va a buscar de la base de datos los datos de productos para modificarlos
if (!empty($_POST["btnmodifico"])) {
    $nombre=$_POST["nombre"];
    $descripcion=$_POST["descripcion"];
    $precio=$_POST["precio"];
    $activo=$_POST["activo"];
    $id_categoria=$_POST["id_categoria"];
    $tono=$_POST["tono"];
    $patron=$_POST["patron"];
    $tipo=$_POST["tipo"];
    $especificaciones=$_POST["especificaciones"];
    
    $sql=$conexion->query("update productos set nombre='$nombre', descripcion='$descripcion', precio=$precio, activo=$activo, id_categoria=$id_categoria, tono='$tono', patron='$patron', tipo='$tipo', especificaciones='$especificaciones' where id=$id");
    if ($sql==1) {
        header('location:../index.php?ruta=productos');
    }else{
      
        print('error');
    } 
}
?>