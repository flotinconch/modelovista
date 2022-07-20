<?php
//va a traer los campos de la base de datos para insertar un nuevo usuario
    if (!empty($_POST["btnregistrar"])) {
        if (!empty($_POST["user"]) and !empty($_POST["password"])and !empty($_POST["name"])and !empty($_POST["lastname"])and !empty($_POST["email"])) {
            $usuario=$_POST["user"];
            $password=$_POST["password"];
            $name=$_POST["name"];
            $lastname=$_POST["lastname"];
            $email=$_POST["email"];

            $sql=$conexion->query(" insert into user(user, password, name, lastname, email)values('$usuario', '$password', '$name', '$lastname', '$email') ");
            if ($sql==1) {
               
            }else{
              
            }
        }else{
          
        }

    }
?>