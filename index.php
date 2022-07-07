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
    //                  LIBRARYS               //
    /////////////////////////////////////////////
    

    /////////////////////////////////////////////
                    /* run */
    $objRun = new Template();
    $objRun->getIntro();
    
?>