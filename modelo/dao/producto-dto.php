<?php
    //require_once "../model/conexion.php";
    //require_once "../model/dto/user.dto.php";

    class UserModel{
        private $id;
        private $nombre;
        private $descripcion;
        private $precio;
        private $activo;
        private $id_categoria;
        private $tono;
        private $patron;
        private $tipo;
        private $especificaciones;

        public function __construct($datos){
            $this ->code      =  $datos -> getCode() ;
            $this ->user      =  $datos -> getUser() ;
            $this ->password  =  $datos -> getPassword() ;
            $this ->name      =  $datos -> getName() ;
            $this ->lastName  =  $datos -> getLastName() ;
            $this ->email  =  $datos -> getemail() ;
        }
    
       
}//END CLASS
?>