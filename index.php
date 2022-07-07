<?php

    /////////////////////////////////////////////
    //                 CONTROLLER              //
    /////////////////////////////////////////////
    require_once 'controller/user.controller.php';
    require_once 'controller/template.controller.php';
    require_once 'controller/controller.productos.php';

    /////////////////////////////////////////////
    //                   MODEL                 //
    /////////////////////////////////////////////
    require_once 'model/dao/user.dao.php';
    require_once 'model/dto/user.dto.php';
    require_once 'model/model.register.php';
    require_once 'model/productos.model.php';
   // require_once 'model/carrito.model.php';
    
    
    /////////////////////////////////////////////
    //                 CONEXION                //
    /////////////////////////////////////////////
    require_once 'model/conexion.php';

    /////////////////////////////////////////////
    //          funciones carrito              //
    /////////////////////////////////////////////
    //require_once 'funciones/agregar_al_carrito.php';
    //require_once 'funciones/eliminar_del_carrito.php';
    //require_once 'funciones/eliminar_producto.php';
    require_once 'funciones/funciones.php';
    //require_once 'funciones/guardar_producto.php';
    //require_once 'funciones/terminar_compra.php';
    

    /////////////////////////////////////////////
                    /* run */
    $objRun = new Template();
    $objRun->getIntro();
    
?>