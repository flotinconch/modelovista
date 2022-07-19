<!-- se hizo la funcion de cerrar session  -->
<?php
session_start();
session_destroy();
header('location: index.php');

?>