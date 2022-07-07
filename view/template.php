<?php

  include_once 'view/module/head.php';
  include_once 'view/module/header.php';


  if (isset($_GET['ruta'])){ //Si variable ruta existe
    switch ($_GET['ruta']) {
      case 'usuario':
        include_once 'view/module/user.php';
        break;
      case 'erase':
        include_once 'view/module/erase.php';
        break;
     case 'matricula':
        include_once 'view/module/matricula.php';
        break;
     case 'register':
        include_once 'view/module/register.php';
        break;
    case 'aprendiz':
        include_once 'view/module/aprendiz.php';
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
        include_once 'view/module/user.php';
        break;
    }
  } else {
    include_once 'view/module/user.php';
   
  }
  include_once 'view/module/footer.php';
?>
  