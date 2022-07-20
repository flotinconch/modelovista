<?php
//redirecciones de los php


 // include_once 'view/module/head.php';
  //include_once 'view/module/header.php';


  if (isset($_GET['ruta'])){ //Si variable ruta existe
    switch ($_GET['ruta']) {
      case 'usuario':
        include_once 'index_1.php';
        break;
      case 'productos':
        include_once 'view/productos.php';
        break;
        case 'matricula':
          include_once 'view/module/matricula.php';
          break;
          case 'modiuser':
            include_once 'vistamodificar.php';
            break;
            case 'modipro':
                include_once 'vistamodificarproducto.php';
                break; 
    

     
    }
  }else{
    include_once 'index_1.php';
  }
?>