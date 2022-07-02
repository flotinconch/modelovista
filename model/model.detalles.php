<?php
$db = new Database();
$con = $db->conectar();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset( $_GET['token']) ? $_GET['token'] : '';

if($id == '' || $token == ''){
  echo 'Error al procesar la peticion';
  exit;
} else {

  $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

if($token == $token_tmp){

  $sql = $con->prepare("SELECT count(id) FROM productos WHERE id=? AND activo=1");
$sql->execute([$id]);
if($sql->fetchColumn() > 0) {


  $sql = $con->prepare("SELECT nombre, descripcion, precio, descuento,tono,patron,tipo,especificaciones FROM productos WHERE id=? AND activo=1");
$sql->execute([$id]);
$row = $sql->fetch(PDO::FETCH_ASSOC);
$nombre = $row ['nombre'];
$precio = $row ['precio'];
$descripcion = $row ['descripcion'];
$descuento = $row ['descuento'];
$tono = $row ['tono'];
$tono = $row ['patron'];
$tipo = $row ['tipo'];
$especificaciones = $row ['especificaciones'];
$precio_desc = $precio - (($precio*$descuento)/100);
$dir_images = 'view/img/images/productos/'. $id .'/';

$rutaimg = $dir_images . 'r.jpg';

if(!file_exists($rutaimg)){
  $rutaimg = 'view/img/images/no-photo.jpg';
}

$imagenes = array();
if(file_exists($dir_images)){
$dir = dir($dir_images);

while(($archivo = $dir->read())!= false){
    if($archivo != 'r.jpg' && (strpos($archivo, 'jpg')|| strpos($archivo, 'jpg'))){
      $imagenes[] = $dir_images . $archivo;
    }
}
  $dir ->close();
}
}
} else {

  echo '';
  exit;

}

}

$sql = $con->prepare("SELECT id,nombre,precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>