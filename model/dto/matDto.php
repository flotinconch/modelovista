<?php
    class Matricula{
        private $id;
        private $nombre;
        private $descripcion;
        private $precio;
        private $tono;
        private $patron;
        private $tipo;

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
        public function getCodigoPrograma()
        {
            return $this -> patron;
        }
        public function getCodigoAprendiz()
        {
            return $this -> tipo;
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
        public function setCodigoPrograma($patron)
        {
            $this -> patron = $patron;
        }
        public function setCodigoAprendiz($tipo)
        {
            $this -> tipo = $tipo;
        }

    }

?>