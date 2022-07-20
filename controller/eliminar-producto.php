<?php
//elimina el id de producto 
    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
        $sql=$conexion->query(" delete from productos where id=$id");
        if ($sql==1) {
         
        }else {
           
        }
    }
?>