<?php
    //require_once "../model/conexion.php";
    //require_once "../model/dto/user.dto.php";

    class UserModel{
        private $code;
        private $user;
        private $password;
        private $name;
        private $lastName;
        private $email;

        public function __construct($objDtoUser){
            $this ->code      =  $objDtoUser -> getCode() ;
            $this ->user      =  $objDtoUser -> getUser() ;
            $this ->password  =  $objDtoUser -> getPassword() ;
            $this ->name      =  $objDtoUser -> getName() ;
            $this ->lastName  =  $objDtoUser -> getLastName() ;
            $this ->email  =  $objDtoUser -> getemail() ;
        }
        public function getQueryLogin(){

            $sql  = "SELECT * FROM USER 
                    WHERE USER = ? AND PASSWORD = ?";
            try {
                $objCon = new Conexion();

                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> user,  PDO::PARAM_STR);
                $stmt ->  bindParam(2,  $this -> password,  PDO::PARAM_STR);
                $stmt -> execute();
                $result = $stmt;
            } catch (Exception $e) {
                echo "Error al consultar usuarios " . $e ->getMessage();
            }
            return $result;
        }//END METHOD
       
}//END CLASS
?>