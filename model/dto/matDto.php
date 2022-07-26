<?php
    class Matricula{
        private $id;
        private $nombre;
        private $descripcion;
        private $precio;
        private $tono;
     

        /*Getter*/
        public function getCodigoMatricula()
        {
            return $this -> id;
        }
        public function getFechaMatricula()
        {
            return $this -> nombre;
        }
        public function getNombreCentro()
        {
            return $this -> descripcion;
        }
        public function getCosto()
        {
            return $this -> precio;
        }
        public function getEstado()
        {
            return $this -> tono;
        }


        /*Setter*/
        public function setCodigoMatricula($id)
        {
            $this -> id = $id;
        }
        public function setFechaMatricula($nombre)
        {
            $this -> nombre = $nombre;
        }
        public function setNombreCentro($descripcion)
        {
            $this -> descripcion = $descripcion;
        }
        public function setCosto($precio)
        {
            $this -> precio = $precio;
        }
        public function setEstado($tono)
        {
            $this -> tono = $tono;
        }


    }

?>