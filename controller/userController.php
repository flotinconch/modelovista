<?php
    //require_once("../model/dao/userDao.php");
    //require_once("../model/dto/userDto.php");

    class UserController{

        public function getEvalClave($user, $password){

            try {
                $objDtoUser = new User();
                $objDtoUser -> setUser($user);
                $objDtoUser -> setPassword($password);

                $objDaoUser = new UserModel($objDtoUser);
                if (gettype($objDaoUser -> getQueryLogin() -> fetch()) == 'boolean'){
                    echo "
                    <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Your password is incorrect',
                      })
                    </script>
                    ";

                }else{
                    $_SESSION['login'] = false;
                    header('location:index.php');
                }

            } catch (Exception $e) {
                echo "Error al crear el controller " . $e -> getMessage();
            }
            
        }

        public function setInsertUser($name, $lastname, $user, $password, $email, $phone, $address ){
            try {
                $objDtoUser = new User();
                $objDtoUser -> setName($name);
                $objDtoUser -> setLastname($lastname);
                $objDtoUser -> setUser($user);
                $objDtoUser -> setPassword($password);
                $objDtoUser -> setEmail($email);
                $objDtoUser -> setPhone($phone);
                $objDtoUser -> setAddress($address);
                
       

                $objDaoUser = new UserModel($objDtoUser);

                if ($objDaoUser -> mIdInsertUser()){
                    echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'El usuario se ha guardado',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    </script>";
                }

            } catch (Exception $e) {
                echo "Error en el controlador de insercion" .$e -> getMessage();
            }

        }

        public function setUpdateUser($code ,$name, $lastname, $user, $password, $email, $phone, $address ){
            try {
                $objDtoUser = new User();
                $objDtoUser -> setCode($code);
                $objDtoUser -> setName($name);
                $objDtoUser -> setLastname($lastname);
                $objDtoUser -> setUser($user);
                $objDtoUser -> setPassword($password);
                $objDtoUser -> setEmail($email);
                $objDtoUser -> setPhone($phone);
                $objDtoUser -> setAddress($address);
               

                $objDaoUser = new UserModel($objDtoUser);

                if ($objDaoUser -> mIdUpdateUsuario()) {
                    echo "
                        <script>
                        Swal.fire({
                            'Actualizado!',
                            'Los campos ingresados se han actualizado',
                            'success'
                        })
                        </script>
                    ";
                    include_once("view/module/user.php");
                }

            } catch(PDOException $e) {
                echo "Error al modificar " .$e -> getMessage();
            }
        }

        public function getSearchAllUser(){
            $respon = false;
            try {
                $objDtoUser = new User();
                $objDaoUser = new UserModel($objDtoUser);
                $respon = $objDaoUser -> mIdSearchAllUsers() -> fetchAll(); //La funcion fetchAll es para convertir todos los datos en un arreglo asociativo

            } catch (PDOException $e) {
                echo "Error en la creacion del controlador para mostrar todo ". $e -> getMessage();
            }

            return $respon;
        }

        
    }

    //$objContro = new UserController();
    //$objContro -> getEvalClave("Juan32","22776172");
