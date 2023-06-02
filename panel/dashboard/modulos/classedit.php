<?php
require('../../../config/db.php');

if(isset($_GET['id'])){
    $id_user = $_GET['id'];

    $query = "SELECT * FROM products WHERE id = $id_user";
    $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);
        if(mysqli_num_rows($result)){
        $cnombre = $row['nombre'];
        $cimg = $row['img'];
        $cdescripcion = $row['descripcion'];
        $ccategoria = $row['categoria'];
        $ctipo = $row['tipo'];
        $cprecio = $row['precio'];
        $crestaurante = $row['restaurante'];
        $cdestacado = $row['destacado'];
        $cnuevo = $row['nuevo'];
        }
    }

    if(isset($_POST['back'])){
        header("location: ../index.php");
    }

    if(isset($_POST['update'])){
        $id_user = $_GET['id'];
        $nombre = $_POST['nombre'];
        $img = $_POST['img'];
        $descripcion = $_POST['descripcion'];
        $categoria = $_POST['categoria'];
        $tipo = $_POST['tipo'];
        $precio = $_POST['precio'];
        $restaurante = $_POST['restaurante'];
        $destacado = $_POST['destacado'];
        $nuevo = $_POST['nuevo'];

        $query_udpdate = "UPDATE products SET nombre = '$nombre', img = '$img', descripcion = '$descripcion', categoria = '$categoria', tipo = '$tipo', precio = '$precio', restaurante = '$restaurante', destacado = '$destacado', nuevo = '$nuevo' WHERE id = '$id_user'";
        $result_update = mysqli_query($connection, $query_udpdate);

        header("location: manageclass.php");
    }

    

session_start();

if(!isset($_SESSION['id'])){
  header("location: index.php");
}
$role = $_SESSION['role'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin panel</title>
  <link rel="stylesheet" href="assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="assets/text/css" href="assets/js/select.dataTables.min.css">
  <link rel="stylesheet" href="assets/css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
  <?php include('../componentes/header.php');?>
    <div class="container-fluid page-body-wrapper">
    <?php include('../componentes/nav.php');?>
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Crear una nueva clase</h4>
                  <p class="card-description">
                    crea una clase para que tus estudiantes puedan ingresar
                  </p>
                  <form class="forms-sample" method="POST" action="classedit.php?id=<?php echo $_GET['id']?>">
                  <div class="form-group">
                      <label for="classname">Nombre del producto</label>
                      <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $cnombre;?>" placeholder="Nombre de la clase">
                    </div>
                    <div class="form-group">
                      <label for="classdescription">imagen del producto</label>
                      <input type="text" name="img" class="form-control" id="img" value="<?php echo $cimg;?> placeholder="Descripción de la clase">
                    </div>
                    <div class="form-group">
                      <label for="classdescription">Descripción</label>
                      <input type="text" name="descripcion" class="form-control" id="descripcion" value="<?php echo $cdescripcion;?>" placeholder="Descripción de la clase">
                    </div>
                    <div class="form-group">
                      <label for="classdescription">Categoria</label>
                      <input type="text" name="categoria" class="form-control" id="categoria" value="<?php echo $ccategoria;?>" placeholder="Descripción de la clase">
                    </div>
                    <div class="form-group">
                      <label for="classdescription">Tipo</label>
                      <input type="text" name="tipo" class="form-control" id="tipo" value="<?php echo $ctipo;?>" placeholder="Descripción de la clase">
                    </div>
                    <div class="form-group">
                      <label for="classdescription">Precio</label>
                      <input type="text" name="precio" class="form-control" id="precio" value="<?php echo $cprecio;?>" placeholder="Descripción de la clase">
                    </div>
                    <div class="form-group">
                      <label for="classdescription">Restaurante</label>
                      <input type="text" name="restaurante" class="form-control" id="restaurante" value="<?php echo $crestaurante;?>" placeholder="Descripción de la clase">
                    </div>
                    <div class="form-group">
                      <label for="classdescription">Destacado</label>
                      <input type="text" name="destacado" class="form-control" id="destacado" value="<?php echo $cdestacado;?>" placeholder="Descripción de la clase">
                    </div>
                    <div class="form-group">
                      <label for="classdescription">Nuevo</label>
                      <input type="text" name="nuevo" class="form-control" id="nuevo" value="<?php echo $cnuevo;?>" placeholder="Descripción de la clase">
                    </div>
                    <button type="submit" name="update" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light" name="back">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
      
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="assets/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

