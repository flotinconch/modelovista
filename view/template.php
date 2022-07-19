<?php

  include_once 'view/module/head.php';
  include_once 'view/module/header.php';


  if (isset($_GET['ruta'])){ //Si variable ruta existe
    switch ($_GET['ruta']) {
      case 'inicio':
        include_once 'view/module/inicio.php';
        break;
     case 'galeria':
        include_once 'view/module/galeria.php';
        break;
     case 'register':
        include_once 'view/module/register.php';
        break;
    case 'productos':
        include_once 'view/module/productos.php';
        break;
    case 'detalles':
        include_once 'view/module/detalles.php';
        break;
    case 'pro':
      include_once 'view/module/pro.php';
      break;
    case 'contacto':
      include_once 'view/module/contacto.php';
      break;
      case 'carrito':
        include_once 'view/module/ver_carrito.php';
        break;

      default:
        include_once 'view/module/inicio.php';
        break;
    }
  } else {
    include_once 'view/module/inicio.php';
   
  }
  include_once 'view/module/footer.php';
?>
  