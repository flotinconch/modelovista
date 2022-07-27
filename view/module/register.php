<!-- se llaman las funciones para registrar los usuarios y se muestra el register -->
<?php

require_once('../../model/conexion.php');
require_once('../../model/model.register.php');
//require_once('../css/register.css');
require_once('head.php');
 ?>
 

</html>


<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
                <br>
                <br>
                <br>
                <br>
                
              
              <img src="../img/img2.jpg"   alt="image" height="600" width="1300"
                 class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Registrate</h3>
                <?php 
                                        if(isset($errors) && count($errors) > 0)
                                        {
                                            foreach($errors as $error_msg)
                                            {
                                                echo '<div class="alert alert-danger">'.$error_msg.'</div>';
                                            }
                                        }
                                        
                                        if(isset($success))
                                        {
                                            
                                            echo '<div class="alert alert-success">'.$success.'</div>';
                                        }
                                    ?>
                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1m">Nombre</label>
                      <input class="form-control py-4" name="name" id="inputFirstName" type="text" placeholder="Enter first name" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1n">Apellido</label>
                      <input class="form-control py-4" name="lastname" id="inputLastName" type="text" placeholder="Enter last name" />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
      
                      <label class="form-label" for="form3Example1m1">User</label>
                      <input class="form-control py-4" name="user" id="inputuser" type="text" placeholder="Enter user" />
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                     
                      <label class="form-label" for="form3Example1n1">email</label>
                      <input class="form-control py-4" name="email" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                    </div>
                  </div>
                </div>

              


     

                <div class="form-outline mb-4">
         
                  <label class="form-label" for="form3Example97">password</label>
                  <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Enter password" />
                </div>

                <div class="d-flex justify-content-end pt-3">
                <button type="submit" name="submit" class="btn btn-primary">Registrarse</button>
                <div class="card-footer text-center">
                 <!-- <div class="big"><a href="../../index.php">¿ya tienes una cuenta? Ir a iniciar sesión</a></div> -->
                  <button type="button"> <a href="../../index.php">¿ya tienes una cuenta? Ir a iniciar sesión</a></button>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>