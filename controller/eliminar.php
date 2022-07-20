<?php
//elimina el id de usuario
    if (!empty($_GET["id"])) {
        $id = $_GET["id"];
        $sql=$conexion->query(" delete from user where Code=$id");
        if ($sql==1) {
           
        }else {
   
        }
    }
?>