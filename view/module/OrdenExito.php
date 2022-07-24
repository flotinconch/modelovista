<?php
if (!isset($_REQUEST['id'])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Orden Completado - PHP Carrito de Compras</title>
  <meta charset="utf-8">
  <style>
    <?php
    include_once "../css/css_pagos/carrito.css";
    ?>
  </style>
</head>
</head>

<body>
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">

        <ul class="nav nav-pills">
          <li role="presentation" class="active"><a href="../../index.php?ruta=productos">Volver</a></li>
         
        </ul>
      </div>

      <div class="panel-body">

        <h1>Estado de tu Requerimiento</h1>
        <p>Para completar la orden completa el pago si no tu orden sera cancelada <br><?php  echo"tu id de orden es: "; echo $_GET['id']; ?></p>

      </div>
      
      
    </div>
    <!--Panek cierra-->
  </div>
</body>

</html>