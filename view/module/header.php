<?php
// la cabecera

//srequire_once 'model/carrito.model.php';

?>


<header class="u-clearfix u-header u-sticky u-sticky-1a7a u-white u-header" id="sec-6138"  data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index.php?ruta=inicio" class="u-image u-logo u-image-1" data-image-width="1363" data-image-height="1363">
          <img src="view/img/logo.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php?ruta=inicio" style="padding: 10px 20px;">inicio</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php?ruta=pro" data-page-id="52815737" style="padding: 10px 20px;">productos</a>
<div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
    <li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="index.php?ruta=productos">Comprar</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php?ruta=galeria" style="padding: 10px 20px;">galeria</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php?ruta=contacto" data-page-id="52815737" style="padding: 10px 20px;">Contacto</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php?ruta=carrito" style="padding: 10px 20px;">Carrito <span id="num_cart" class="badge bg-secondary"><?php
                                                include_once "funciones/funciones.php";
                                                $conteo = count(obtenerIdsDeProductosEnCarrito());
                                                if ($conteo > 0) {
                                                    printf("(%d)", $conteo);
                                                }
                                                ?></span></a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php?ruta=pro" data-page-id="52815737" style="padding: 10px 20px;"> <?php
        if (isset($_SESSION['login']) and $_SESSION['login'] == true ){
                //SI LA SEESION ES CORRECTA MOSTRAR ESTO
                echo "Usuario";
                    }else{
//SI LA SESION NO ESTA PON ESTO
                    }
                    ?></a>
<div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
<li class="user-footer">
                <div class="pull-right">
                  <form method="post">
                    <input type="hidden" name="txtSalir">
                    <button hrfe="cerrarsession.php" class="btn btn-default btn-flat">Cerrar</button>
                  </form>
                 
                </div>
              </li>
            <ul class="dropdown-menu">
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <form method="post">
                  <input type="hidden" name="txtSalir">
                    <button hrfe="cerrarsession.php" class="btn btn-default btn-flat">Cerrar</button>
                  </form>
                  <?php
                    if (isset($_POST['txtSalir'])){
                      $_SESSION['login'] = false;
                      unset($_SESSION['login']);
                      header('location: index.php');
                    }
                  ?>
</li></ul>
</div>
       
                    </li>
</li></ul>
          </div>
        </nav>
        
       
      </div><style class="u-sticky-style" data-style-id="1a7a">.u-sticky-fixed.u-sticky-1a7a:before, .u-body.u-sticky-fixed .u-sticky-1a7a:before {
borders: top right bottom left !important; border-color: #404040 !important; border-width: 2px !important
}</style>
</header>