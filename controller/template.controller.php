<?php
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


?>