<?php
    class MatriculaModel{
        private $id;
        private $nombre;
        private $descripcion;
        private $precio;
        private $tono;
        private $patron;
        private $tipo;

        public function __construct($objDtoMatricula)
        {
            $this -> id = $objDtoMatricula -> getCodigoMatricula();
            $this -> nombre = $objDtoMatricula -> getFechaMatricula();
            $this -> descripcion = $objDtoMatricula -> getNombreCentro();
            $this -> precio = $objDtoMatricula -> getCosto();
            $this -> tono = $objDtoMatricula -> getEstado();
            $this -> patron = $objDtoMatricula -> getCodigoPrograma();
            $this -> tipo = $objDtoMatricula -> getCodigoAprendiz();
        }

        public function mIdInsertMatricula()
        {
            $sql = "CALL spInsertMatricula(?, ?, ?, ?, ?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this -> nombre,          PDO::PARAM_STR);
                $stmt -> bindParam(2, $this -> descripcion,            PDO::PARAM_STR);
                $stmt -> bindParam(3, $this -> precio,                   PDO::PARAM_STR);
                $stmt -> bindParam(4, $this -> tono,                  PDO::PARAM_STR);
                $stmt -> bindParam(5, $this -> patron,          PDO::PARAM_INT);
                $stmt -> bindParam(6, $this -> tipo,          PDO::PARAM_INT);
                $estado = $stmt -> execute();
            } catch (PDOexception $e) {
                echo "Error al insertar Matricula " . $e -> getMessage();
            }
            return $estado;
        }

        public function mIdSearchAllMatricula()
        {
            $sql = "call spSearchAllMatricula()";

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

        public function mIdEraseMatricula()
        {
            $respon = false;
            $sql = "call spDeleteMatricula(?)";

            try {
                $objCon = new Conexion;
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this-> id, PDO::PARAM_INT);
                $stmt -> execute();
                $respon = true;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al eliminar los registros en el dao de Matricula " .$e -> getMessage();
            }
            return $respon;
        }

        public function mIdUpdateMatricula()
        {
            $sql = "CALL spUpdateMatricula(?, ?, ?, ?, ?, ?, ?);";
            $estado = false;

            try {
                $objCon = new Conexion();
                $stmt = $objCon -> getConec() -> prepare($sql);
                $stmt -> bindParam(1, $this -> id,         PDO::PARAM_INT);
                $stmt -> bindParam(2, $this -> nombre,          PDO::PARAM_STR);
                $stmt -> bindParam(3, $this -> descripcion,            PDO::PARAM_STR);
                $stmt -> bindParam(4, $this -> precio,                   PDO::PARAM_STR);
                $stmt -> bindParam(5, $this -> tono,                  PDO::PARAM_STR);
                $stmt -> bindParam(6, $this -> patron,          PDO::PARAM_INT);
                $stmt -> bindParam(7, $this -> tipo,          PDO::PARAM_INT);
                $estado = $stmt -> execute();
            } catch (PDOexception $e) {
                echo "Error al modificar matricula " . $e -> getMessage();
            }
            return $estado;
        }
    }

?>