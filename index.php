<?php

    /////////////////////////////////////////////
    //                 CONTROLLER              //
    /////////////////////////////////////////////
    require_once 'controller/user.controller.php';
    require_once 'controller/template.controller.php';
   

    /////////////////////////////////////////////
    //                   MODEL                 //
    /////////////////////////////////////////////
    require_once 'model/dao/user.dao.php';
    require_once 'model/dto/user.dto.php';
    require_once 'model/model.register.php';
   
  
    
    
    /////////////////////////////////////////////
    //                 CONEXION                //
    /////////////////////////////////////////////
    require_once 'model/conexion.php';
   // require_once 'la-carta.php';
    /////////////////////////////////////////////
    //          funciones carrito              //
    /////////////////////////////////////////////
    
   
   
    

    /////////////////////////////////////////////
                    /* run */
    $objRun = new Template();
    $objRun->getIntro();
    
?>