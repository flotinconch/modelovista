<?php
//suma los productos agregados en carrito//
$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count ($_SESSION['carrito']['productos']);
}
?>