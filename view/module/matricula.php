<input type="hidden" id="icode" name="icode">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Matricula
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-mortar-board"></i> Matricula</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Ingreso de matricula</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        
      <div class="box-body">  
      <form method="POST" id="formMatricula">

          <!-- ROW 1 CONTIENE FECHA Y NOMBRE CENTRO-->
            <div class="row">
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">nombre</span>
                  <input id="nombre" name="nombre" type="text" class="form-control">
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">descripcion</span>
                  <input id="descripcion" name="descripcion" type="text" class="form-control">
                </div>
              </div>
            </div>
            <br>
          <!-- ROW 2 CONTIENE COSTO Y ESTADO-->
            <div class="row">
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">precio</span>
                  <input id="precio" name="precio" type="number" class="form-control">
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">tono</span>
                  <input id="tono" name="tono" type="text" class="form-control">
                </div>
              </div>
              <!-- ./col -->
            </div>
            <br>
          <!-- ROW 3 CONTIENE CODIGO PROGRAMA Y APRENDIZ-->
            <div class="row">
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">patron</span>
                  <input id="patron" name="patron" type="text" class="form-control">
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">tipo</span>
                  <input id="tipo" name="tipo" type="text" class="form-control">
                </div>
              </div>
              <!-- ./col -->
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-app bg-blue" type="submit" onclick="validateMatricula(event)">
            <i class="fa fa-save"></i> Guardar
          </button>
          <button class="btn btn-app bg-gray" type="submit" onclick="getGenerarReporteMatricula(event)">
            <i class="fa fa-print"></i> Reporte
          </button>
        </div>
        <!-- /.box-footer-->
      </form>
      </div>
      <?php
        if (isset($_POST['nombre'])){
          $objCtrMatricula = new MatriculaController();
          $objCtrMatricula -> setInsertMatricula($_POST['nombre'], $_POST['descripcion'], $_POST['precio'], $_POST['tono'], $_POST['patron'], $_POST['tipo']);
        }
      ?>

    </div>
    <!-- /.box -->

    <!-- Otro box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Matriculas</h3>
        
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          
            <table id="users" class="table table-bordered table-striped table-hover">
              <thead>
                <!-- Este tr sirve para los títulos -->
                <tr>
                  <th class="text-center">Codigo</th>
                  <th class="text-center">nombre</th>
                  <th class="text-center">descripcion</th>
                  <th class="text-center">precio</th>
                  <th class="text-center">tono</th>
                  <th class="text-center">Codigo Programa</th>
                  <th class="text-center">Codigo Aprendiz</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <form action="" method="post">
                  <?php

                    $objCtrMatriculaAll = new MatriculaController();
                    if (gettype($objCtrMatriculaAll -> getSearchAllMatricula()) == 'boolean') {
                      echo '
                      <tr>
                        <td colspan = "5">No hay datos que mostrar</td>
                      </tr>';  
                    } else {
                      foreach ($objCtrMatriculaAll -> getSearchAllMatricula() as $key => $value) {
                        echo '
                        <tr>
                          <td>'. $value["ID"] .'</td>
                          <td>'. $value["NOMBRE"] .'</td>
                          <td>'. $value["DESCRIPCION"] .'</td>
                          <td>'. $value["PRECIO"] .'</td>
                          <td>'. $value["TONO"] .'</td>
                          <td>'. $value["PATRON"] .'</td>
                          <td>'. $value["TIPO"] .'</td>
                          <td class="text-center">
                            <button class="btn btn-social-icon btn-google" onclick="eraseMat(this.parentElement.parentElement)"><i class="fa fa-trash"></i></button>
                            <button class="btn btn-social-icon bg-blue" onclick="getDataMat(this.parentElement.parentElement)" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o"></i></button>
                            </td>
                            </tr>';
                        }
                      }
                  ?>
                </form>
              </tbody>
            </table> 
        </div>
      
        <!-- /.box-body -->
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Modal para guardar -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header bg-blue">
          <h4 class="modal-title">Modificar Matricula 😜</h4>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <form method="POST" id="formMatriculam">
          <input type="hidden" name="idm" id="idm">
        <!-- ROW 1 MOD CONTIENE FECHA Y NOMBRE CENTRO-->
          <div class="row">
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">nombre</span>
                  <input id="nombrem" name="nombrem" type="text" class="form-control">
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">descripcion</span>
                  <input id="descripcionm" name="descripcionm" type="text" class="form-control">
                </div>
              </div>
            </div>
            <br>
        <!-- ROW 2 MOD CONTIENE COSTO Y ESTADO-->
          <div class="row">
              <div class="col-lg-6 col-xs-6">
                  <!-- small box -->
                  <div class="input-group">
                    <span class="input-group-addon">precio</span>
                    <input id="preciom" name="preciom" type="number" class="form-control">
                  </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
                  <!-- small box -->
                  <div class="input-group">
                    <span class="input-group-addon">tono</span>
                    <input id="tonom" name="tonom" type="text" class="form-control">
                        
                </div>
            </div>
                <!-- ./col -->
          </div>
          <br>
        
    
          
          
    
        <!-- ROW 3 MOD CONTIENE CODIGO PROGRAMA Y APRENDIZ-->
          <div class="row">
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">patron</span>
                  <input id="patronm" name="patronm" type="text" class="form-control">
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">tipo</span>
                  <input id="tipom" name="tipom" type="text" class="form-control">
                </div>
              </div>
              <!-- ./col -->
            </div>
        </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-google bg-blue" type="submit" onclick="validateMatriculaMod(event)">
            <i class="fa fa-save"></i> Guardar
          </button>
          <?php
            if (isset($_POST['nombrem'])){
              $objCtrMatricula = new MatriculaController();
              $objCtrMatricula -> setUpdateMatricula($_POST['idm'],$_POST['nombrem'], $_POST['descripcionm'], $_POST['preciom'], $_POST['tonom'], $_POST['patronm'], $_POST['tipom']);
            }
          ?>
          <button type="button" class="btn btn-google bg-red" data-dismiss="modal">
          <i class="fa fa-close"></i> Cerrar
          </button>
        </div>

      </div>
    </div>
  </div>