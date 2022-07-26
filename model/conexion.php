<?php

$dsn = 'mysql:dbname=bye;host=localhost';
$user = 'root';
$password = '';
$mysqli = new mysqli("localhost","root","","bye");
try
{
	$pdo = new PDO($dsn,$user,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo "PDO error".$e->getMessage();
	die();
}

    class Conexion{
        private $host;
        private $drive;
        private $base;
        private $user;
        private $pass;
        private $url;
        private $charset;

        public function __construct()
        {
            $this -> host = "localhost";
            $this -> drive = "mysql";
            $this -> base = "bye";
            $this -> user = "root";
            $this -> pass = "";
            $this -> url = $this -> drive . ":host=". 
                            $this -> host. ";dbname=" . 
                            $this -> base;
            $this -> charset = "UTF8";
        }

        public function getConec()
        {
            try {
                $con = new PDO($this -> url, $this -> user, $this -> pass);
                #var_dump($con);

            } catch (Exception $e) {
                echo "Error de conexion a la base de datos <br>" . $e ->getMessage();
            }
            return $con;
        }
    }

    #$objCon = new Conexion();
    #$objCon -> getConec();

?>