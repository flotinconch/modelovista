<?php

//llamar todas las funciones
require_once "controller/templatecontroller.php";

//controler

require_once "controller/modificar-producto.php";
require_once "controller/modificar.php";


//conexion
require_once "modelo/conexion.php";

$obj = new template();
$obj->getIntro();
?>