<?php
// initializ shopping cart class
//include 'controller/template.controller.php';
$cart = new Cart;

// redirect to home if cart is empty
if ($cart->total_items() <= 0) {
    header("Location:  index.php?ruta=productos");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM user WHERE code = " . $_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();