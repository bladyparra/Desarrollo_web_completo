<?php
  include_once 'funciones/funciones.php';
  include_once 'templates/header.php';
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Administradores
        <small>llena el formulario para crear un administrador</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin-area.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Crear Administradores</li>
      </ol>
    </section>

    <div class="row">
      <div class="col-md-8">
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Crear Administrador</h3>
            </div>
            <div class="box-body">
              <!-- form start -->
              <form role="form" name="crea-admin" id="crear-admin" method="POST" action="insertar-admin.php">
                <div class="box-body">
                  <div class="form-group">
                    <label for="usuario">Usuario:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="usuario" placeholder="Ingrese su usuario">
                  </div>
                  <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" placeholder="Ingrese su nombre">
                  </div>
                  <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Ingrese su password">
                  </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                  <input type="hidden" value="1" name="agregar-admin">
                  <button type="submit" class="btn btn-primary">Añadir</button>
                </div>
              </form>
            </div><!-- /.box-body -->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div>
    </div>
  </div><!-- /.content-wrapper -->

<?php
  include_once 'templates/footer.php';
?>

