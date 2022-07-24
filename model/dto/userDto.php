<?php
    class User{
        private $code;
        private $name;
        private $lastname;
        private $user;
        private $password;
        private $email;
        private $phone;
        private $address;
        
        /*Getter*/
        public function getCode()
        {
            return $this -> code;
        }
        public function getName()
        {
            return $this -> name;
        }
        public function getLastname()
        {
            return $this -> lastname;
        }
        public function getUser()
        {
            return $this -> user;
        }
        public function getPassword()
        {
            return $this -> password;
        }
        public function getEmail()
        {
            return $this -> email;
        }
        public function getPhone()
        {
            return $this -> phone;
        }
        public function getAddress()
        {
            return $this -> address;
        }
       

        /*Setter */
        public function setCode($code)
        {
            $this -> code = $code;
        }
        public function setName($name)
        {
            $this -> name = $name;
        }
        public function setLastName($lastname)
        {
            $this -> lastname = $lastname;
        }
        public function setUser($user)
        {
            $this -> user = $user;
        }
        public function setPassword($password)
        {
            $this -> password = $password;
        }
        public function setEmail($email)
        {
            $this -> email = $email;
        }
        public function setPhone($phone)
        {
            $this -> phone = $phone;
        }
        public function setAddress($address)
        {
            $this -> address = $address;
        }
      
    }

?>