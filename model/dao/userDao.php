<?php
    //include_once "../model/conexion.php";
    //include_once "../model/dto/userDto.php";

    class UserModel{
        private $code;
        private $name;
        private $lastname;
        private $user;
        private $password;
        private $email;
        private $phone;
        private $address;
       

        public function __construct($objDtoUser)
        {
            $this -> code = $objDtoUser -> getCode();
            $this -> name = $objDtoUser -> getName();
            $this -> lastname = $objDtoUser -> getLastname();
            $this -> user = $objDtoUser -> getUser();
            $this -> password = $objDtoUser -> getPassword();
            $this -> email = $objDtoUser -> getEmail();
            $this -> phone = $objDtoUser -> getPhone();
            $this -> address = $objDtoUser -> getAddress();
          
        }

        public function getQueryLogin()
        {
            $sql = "SELECT * FROM user WHERE user = ? AND password = ?";

            try {
                $objCon = new Conexion;
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this -> user, PDO::PARAM_STR);
                $stmt -> bindParam(2, $this -> password, PDO::PARAM_STR);
                $stmt -> execute();
                $result = $stmt;

            } catch (Exception $e) {
                echo "Error al consultar usuarios " . $e -> getMessage();
            }
            return $result;
        }

        public function mIdInsertUser()
        {
            $sql = "CALL spInsertUser(?, ?, ?, ?, ?, ?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this -> name,     PDO::PARAM_STR);
                $stmt -> bindParam(2, $this -> lastname, PDO::PARAM_STR);
                $stmt -> bindParam(3, $this -> user,    PDO::PARAM_STR);
                $stmt -> bindParam(4, $this -> password, PDO::PARAM_STR);
                $stmt -> bindParam(5, $this -> email,     PDO::PARAM_STR);
                $stmt -> bindParam(6, $this -> phone, PDO::PARAM_STR);
                $stmt -> bindParam(7, $this -> address,    PDO::PARAM_STR);
              
              
                $estado = $stmt -> execute();
            } catch (PDOexception $e) {
                echo "Error al insertar usuarios " . $e -> getMessage();
            }
            return $estado;
        }

        public function mIdSearchAllUsers()
        {
            $sql = "call spSearchAllUser()";

            try {
                $objCon = new Conexion;
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> execute();
                $respon = $stmt;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al mostrar los datos en el dao " .$e -> getMessage();
            }

            return $respon;
        }

        public function mIdEraseUser()
        {
            $respon = false;

            $sql = "call spDeleteUser(?)";

            try {
                $objCon = new Conexion;
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this->code, PDO::PARAM_INT);
                $stmt -> execute();
                $respon = true;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al eliminar los registros en el dao " .$e -> getMessage();
            }
            return $respon;
        }

        public function mIdUpdateUsuario()
        {
            $sql = "CALL spUpdateUser(?, ?, ?, ?, ?, ?, ?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this -> code,     PDO::PARAM_INT);
                $stmt -> bindParam(2, $this -> name,     PDO::PARAM_STR);
                $stmt -> bindParam(3, $this -> lastname, PDO::PARAM_STR);
                $stmt -> bindParam(4, $this -> user,    PDO::PARAM_STR);
                $stmt -> bindParam(5, $this -> password, PDO::PARAM_STR);
                $stmt -> bindParam(6, $this -> email,     PDO::PARAM_INT);
                $stmt -> bindParam(7, $this -> phone,     PDO::PARAM_STR);
                $stmt -> bindParam(8, $this -> address, PDO::PARAM_STR);
              
                $estado = $stmt -> execute();
            } catch (PDOexception $e) {
                echo "Error al modificar usuarios " . $e -> getMessage();
            }
            return $estado;
        }

    }

?>