<?php
//va a buscar de la base de datos los datos de los usuarios para modificarlos
if (!empty($_POST["btnmodificar"])) {
    $usuario=$_POST["user"];
    $password=$_POST["password"];
    $name=$_POST["name"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];

    $sql=$conexion->query("update user set user='$usuario', Password='$password', name='$name',lastname='$lastname', email='$email'  where Code=$id");
    if ($sql==1) {
        header('location:../index.php?ruta=usuario');
    }else{
       
    } 
}
?>