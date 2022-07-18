<?php
//se esta definiendo las variables del tipo de moneda y 
//se dice que si la sesion esta iniciada y mostrara los productos que se subio al carrito en la sesion
define("KEY_TOKEN", "Jaggerdavidelmashermoso-123");
define("MONEDA", "$");

session_start();
$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count ($_SESSION['carrito']['productos']);
}
class Template{
    public function getIntro(){
        
        if (isset($_SESSION['login']) and $_SESSION['login'] == true ){
            require_once "view/template.php";
        }else{
            require_once "view/module/login.php";
        }

    }
}

//se esta haciendo la redireccion del login
?>