<?php
require 'model/productos.model.php';
?>

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<main>
  
  <div class="album py-5 bg-light" class="d-block w-100">
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php foreach ($resultado as $row){ ?>
        <div class="col" >
          <div class="card shadow-sm">
              <?php

              $id = $row['id'];
              $imagen = "view/img/images/productos/$id/R.jpg";
            

              if(!file_exists($imagen)){
                $imagen = "view/img/images/no-photo.png";
              }

              ?>
            <img src="<?php echo $imagen; ?> " class="d-block w-100" alt="image" height="400" width="400">
            <div class="card-body">
              <p class="card-title"><?php echo $row['nombre'] ?></p>
              <p class="card-text"><?php echo number_format( $row['precio'],2,'.',','); ?></p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="container">
  <button type="button" class="btn btn-primary mt-5" data-toggle="collapse" data-target="#demo">Descripcion</button>
  <div id="demo" class="collapse">
  <?php echo "tipo: "; echo $row['descripcion']; ?>
  <br>
  <?php echo "tono: "; echo $row['tono'];  ?>
  <br>
   <?php echo "patron: "; echo $row['patron'];  ?>
   <br>
   <?php echo "material: "; echo $row['tipo'];  ?>
   <br>
   <?php echo "detalles: "; echo $row['especificaciones'];  ?>

  </div>
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
   