<!-- se le da la funcion a las variables -->
<?php

    class User{

        private $code;
        private $user;
        private $password;
        private $name;
        private $lastName;
        private $email;

        /*GETTERS*/
        public function getCode(){
            return $this->code;
        }
        public function getUser(){
            return $this->user;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getName(){
            return $this->name;
        }
        public function getLastName(){
            return $this->lastName;
        }
        public function getemail(){
            return $this->email;
        }
        /*SETTING */
        public function setCode ( $code ){
            $this -> code = $code;
        }
        public function setUser ( $user ){
            $this -> user = $user;
        }
        public function setPassword ( $password ){
            $this -> password = $password;
        }
        public function setName ( $name ){
            $this -> name = $name;
        }
        public function setLastName ( $lastName ){
            $this -> lastName = $lastName;
        }
        public function setemail ( $email ){
            $this -> email = $email;
        }
    }

?>