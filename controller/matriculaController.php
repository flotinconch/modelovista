<?php
    class MatriculaController{

        public function setInsertMatricula($nombre,$descripcion,$precio,$tono){
            try {
                $objDtoMatricula = new Matricula();
                $objDtoMatricula -> setFechaMatricula($nombre);
                $objDtoMatricula -> setNombreCentro($descripcion);
                $objDtoMatricula -> setCosto($precio);
                $objDtoMatricula -> setEstado($tono);


                $objDaoMatricula = new MatriculaModel($objDtoMatricula);

                if ($objDaoMatricula -> mIdInsertMatricula()){
                    echo "<script>
                        Swal.fire({
                            icon: 'success',
                            title: 'La Matricula se ha guardado',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    </script>";
                }

            } catch (Exception $e) {
                echo "Error en el controlador de insercion" .$e -> getMessage();
            }
        }

        public function getSearchAllMatricula(){
            $respon = false;
            try {
                $objDtoMatricula = new Matricula();
                $objDaoMatricula = new MatriculaModel($objDtoMatricula);
                $respon = $objDaoMatricula -> mIdSearchAllMatricula() -> fetchAll(); //La funcion fetchAll es para convertir todos los datos en un arreglo asociativo

            } catch (PDOException $e) {
                echo "Error en la creacion del controlador para mostrar todas las Matriculas ". $e -> getMessage();
            }

            return $respon;
        }

        public function setUpdateMatricula($id,$nombre,$descripcion,$precio,$tono){
            try {
                $objDtoMatricula = new Matricula();
                $objDtoMatricula -> setCodigoMatricula($id);
                $objDtoMatricula -> setFechaMatricula($nombre);
                $objDtoMatricula -> setNombreCentro($descripcion);
                $objDtoMatricula -> setCosto($precio);
                $objDtoMatricula -> setEstado($tono);
         

                $objDaoMatricula = new MatriculaModel($objDtoMatricula);

                if ($objDaoMatricula -> mIdUpdateMatricula()) {
                    // include_once("view/module/matricula.php");
                    echo 
                        "<script>
                            location.replace('matricula');
                        </script>";
                }

            } catch(PDOException $e) {
                echo "Error al modificar la Matricula parcero" .$e -> getMessage();
            }
        }
    }

?>