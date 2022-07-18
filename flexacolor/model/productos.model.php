<?php

$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id,nombre,precio,descripcion,tono,patron,tipo,especificaciones FROM productoS WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);


?>
