<?php
    //Controler user
    require_once("controller/userController.php");
    require_once("controller/plantController.php");

  

    //Controler Matricula
    require_once("controller/matriculaController.php");
    
    //Models user
    require_once("model/dao/userDao.php");
    require_once("model/dto/userDto.php");
    
 

    //Models Matricula
    require_once("model/dao/matDao.php");
    require_once("model/dto/matDto.php");


    //Conexion
    require_once("model/conexion.php");

    //Arranque
    $objArranque = new Planti();
    $objArranque -> getIntro();
    
?>