<?php

require_once 'conexion.php';

if(isset($_POST['submit']))
{
    if(isset($_POST['user'],$_POST['name'],$_POST['lastname'],$_POST['email'],$_POST['password']) && !empty($_POST['user']) && !empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        $User = trim($_POST['user']);
        $firstName = trim($_POST['name']);
        $lastName = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $hashPassword = $password;
        $date = date('Y-m-d H:i:s');
 
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $sql = 'select * from user where email = :email';
            $stmt = $pdo->prepare($sql);
            $p = ['email'=>$email];
            $stmt->execute($p);
            
            if($stmt->rowCount() == 0)
            {
                $sql = "insert into user (user,name, lastname, email, `password`, created_at,updated_at) values(:vuser,:vname,:vlastname,:email,:password,:created_at,:updated_at)";
            
                try{
                    $handle = $pdo->prepare($sql);
                    $params = [
                        ':vuser'=>$User,
                        ':vname'=>$firstName,
                        ':vlastname'=>$lastName,
                        ':email'=>$email,
                        ':password'=>$password,
                        ':created_at'=>$date,
                        ':updated_at'=>$date
                    ];
                    
                    $handle->execute($params);
                    
                    $success = 'Usuario creado correctamente!!';
                    
                }
                catch(PDOException $e){
                    $errors[] = $e->getMessage();
                }
            }
            else
            {
                $valUser = $User;
                $valFirstName = $firstName;
                $valLastName = $lastName;
                $valEmail = '';
                $valPassword = $password;
 
                $errors[] = 'el Email ya esta registrado';
            }
        }
        else
        {
            $errors[] = "el Email no es valido";
        }
    }
    else
    {
        if(!isset($_POST['user']) || empty($_POST['user']))
        {
            $errors[] = 'el usuario es requerido';
        }
        else
        {
            $valUser = $_POST['user'];
        }
        if(!isset($_POST['name']) || empty($_POST['name']))
        {
            $errors[] = 'el nombre es requerido';
        }
        else
        {
            $valFirstName = $_POST['name'];
        }
        if(!isset($_POST['lastname']) || empty($_POST['lastname']))
        {
            $errors[] = 'el apellido es requerido';
        }
        else
        {
            $valLastName = $_POST['lastname'];
        }
 
        if(!isset($_POST['email']) || empty($_POST['email']))
        {
            $errors[] = 'Email es requerido';
        }
        else
        {
            $valEmail = $_POST['email'];
        }
 
        if(!isset($_POST['password']) || empty($_POST['password']))
        {
            $errors[] = 'el Password es requerido';
        }
        else
        {
            $valPassword = $_POST['password'];
        }
        
    }
 
}
?>