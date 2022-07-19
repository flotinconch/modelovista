<!-- aqui se muestran los productos y se llaman las funciones para que se suban los productos al carrito
se bajen del carrito y obtenga los productos -->
<?php

//include_once "funciones/funciones.php";
//include_once "funciones/agregar_al_carrito.php";
$productos = obtenerProductos();
?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<main>
  
  



<?php

$productos = obtenerProductos();
?>
 <section class="hero is-info">
        <div class="title">
        <div class="container  text-white">
                <h2 class="subtitle">
                    Productos
                </h2>
                </div>
        </div>
    </section>
<?php foreach ($productos as $producto) { ?>

  
    <div class="columns">
        <div class="column is-full">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title is-size-4">
                       <strong> <?php echo $producto->nombre ?> </strong>
                    </p>
                    
                </header>
                <div class="card-content">
                    <div class="content">
                    <div class="album py-5 bg-light" class="d-block w-100">
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col" >
          <div class="card shadow-sm">
          <?php 
                        $imagen = "view/img/images/productos/". ($producto->id) ."/r.jpg";
                       // echo $imagen;
                        if (!file_exists($imagen)) {
                            $imagen = "view/img/images/no-photo.jpg";
                        }
                         ?>
                         <br>
                        
            <img src="<?php echo $imagen; ?> " class="d-block w-100" alt="image" height="400" width="400">
          
            </div>
            </div>
          
        </div>
    </div>
   
    <strong>  <?php echo"descripcion: ";?> </strong> <?php echo $producto->descripcion ?>
    <br>
    <strong>  <?php echo"tono: ";?> </strong> <?php echo $producto->tono ?>
    <br>
    <strong>  <?php echo"patron: ";?> </strong> <?php echo $producto->patron ?>
    <br>
    <strong>  <?php echo"tipo: ";?> </strong> <?php echo $producto->tipo ?>
    <br>
    <strong>  <?php echo"especificaciones: ";?> </strong> <?php echo $producto->especificaciones ?>
    
                    </div>
                    <h1 class="is-size-3">$<?php echo number_format($producto->precio, 2) ?></h1>
                    <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
                        <form action="funciones/eliminar_del_carrito.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                            <span class="button is-success">
                                <i class="fa fa-check"></i>&nbsp;En el carrito
                            </span>
                            <button class="button is-danger">
                                <i class="fa fa-trash-o"></i>&nbsp;Quitar
                            </button>
                        </form>
                    <?php } else { ?>
                        <form action="funciones/agregar_al_carrito.php" method="post">
                            <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                            <button class="button is-primary">
                                <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                            </button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

</main>
