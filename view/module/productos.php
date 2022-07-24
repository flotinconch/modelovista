<?php
include_once "view/css/css_pagos/productos.css";
include 'model/Configuracion.php';
?>

<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">

                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href=" index.php?ruta=productos">Inicio</a></li>
                    <li role="presentation"><a href=" index.php?ruta=carrito">Carrito de Compras</a></li>
                    
                   
                </ul>
            </div>

            <div class="panel-body">
                <h1>Tienda de Productos</h1>
                <a href=" index.php?ruta=carrito" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                <div id="products" class="row list-group">
                    <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM productos ORDER BY id DESC LIMIT 10");
                    if ($query->num_rows > 0) {
                        while ($row = $query->fetch_assoc()) {
                    ?>
                            <div class="item col-lg-4">
                                <div class="thumbnail">
                                    <div class="caption">
                                    <?php 
                        $imagen = "view/img/images/productos/". ($row["id"]) ."/r.jpg";
                       // echo $imagen;
                        if (!file_exists($imagen)) {
                            $imagen = "view/img/images/no-photo.jpg";
                        }
                         ?>
                         <br>
                        
            <img src="<?php echo $imagen; ?> " class="d-block w-100" alt="image" height="400" width="400">
                                        <h4 class="list-group-item-heading"><b><?php echo $row["nombre"]; ?></b></h4>
                                        <p class="list-group-item-text"><b><?php echo "descripcion: " ?></b><?php echo $row["descripcion"]; ?></p>
                                        <p class="list-group-item-text"><b><?php echo "tono: " ?></b><?php echo $row["tono"]; ?></p>
                                        <p class="list-group-item-text"><b><?php echo "tipo: " ?></b><?php echo $row["tipo"]; ?></p>
                                        <p class="list-group-item-text"><b><?php echo "patron: " ?></b><?php echo $row["patron"]; ?></p>
                                        <p class="list-group-item-text"><b><?php echo "especificaciones: " ?></b><?php echo $row["especificaciones"]; ?></p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="lead"><?php echo '$' . $row["precio"] . ' COP'; ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>">Enviar al Carrito</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } else { ?>
                        <p>Producto(s) no existe.....</p>
                    <?php } ?>
                </div>
            </div>
        </div>
        
        <!--Panek cierra-->

    </div>
</body>

</html>