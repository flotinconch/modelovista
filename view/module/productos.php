<?php
require '../../controller/template.controller.php';
require '../../model/conexion.php';
require '../../model/productos.model.php';

?>



<main>
  
  <div class="album py-5 bg-light" class="d-block w-100">
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php foreach ($resultado as $row){ ?>
        <div class="col" >
          <div class="card shadow-sm">
              <?php

              $id = $row['id'];
              $imagen = "images/productos/$id/R.jpg";
            

              if(!file_exists($imagen)){
                $imagen = "images/no-photo.jpg";
              }

              ?>
            <img src="<?php echo $imagen; ?> " class="d-block w-100" alt="image" height="400" width="400">
            <div class="card-body">
              <p class="card-title"><?php echo $row['nombre'] ?></p>
              <p class="card-text"><?php echo number_format( $row['precio'],2,'.',','); ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="detalles.php?id=<?php echo $row['id']; ?>&token=<?php echo hash_hmac('sha1',$row['id'], KEY_TOKEN); ?>" class="btn btn-primary">detalles</a>
                </div>
                <a href="" class="btn btn-success">Agregar</a>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
    </div>
  </div>
</main>
   
 
