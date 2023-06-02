<?php
require('../../../config/db.php');
session_start();

if(!isset($_SESSION['id'])){
  header("location: index.php");
}
$nombre = $_SESSION['nombre'];
$role = $_SESSION['role'];

if(isset($_POST['back'])){
  header("location: ../index.php");
}

if($_POST){
$nombre = $_POST['nombre'];
$img = $_POST['img'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];
$restaurante = $_POST['restaurante'];
$id;

$query = "INSERT INTO products(nombre, img, descripcion, categoria, tipo, precio, restaurante, destacado, nuevo) VALUES ('$nombre','$img','$descripcion','$categoria','$tipo','$precio','$restaurante',0,0)";
$result = mysqli_query($connection, $query);

if($connection->query($result) == TRUE){
  $connection->die();
  header("location: ../../index.php");
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin panel</title>
  <?php include('../componentes/head_module.php');?>
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
                  <h4 class="card-title">Crear nuevo producto</h4>
                  <form class="forms-sample" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div class="form-group">
                      <label for="classname">Nombre del producto</label>
                      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre de la clase">
                    </div>
                    <div class="form-group">
                      <label for="classdescription">imagen del producto</label>
                      <input type="text" name="img" class="form-control" id="img" placeholder="Descripción de la clase">
                    </div>
                    <div class="form-group">
                      <label for="classstemathics">Descripcion del producto</label>
                      <textarea class="form-control" name="descripcion" id="descripcion" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="info">Categoria</label>
                      <textarea class="form-control" name="categoria" id="categoria" rows="20"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="classdescription">Tipo</label>
                      <input type="text" name="tipo" class="form-control" id="tipo" placeholder="Descripción de la clase">
                    </div>
                    <div class="form-group">
                      <label for="classdescription">Precio</label>
                      <input type="text" name="precio" class="form-control" id="precio" placeholder="Descripción de la clase">
                    </div>
                    <div class="form-group">
                      <label for="classdescription">Restaurante</label>
                      <input type="text" name="restaurante" class="form-control" id="restaurante" placeholder="Descripción de la clase">
                    </div>
                    <div class="form-group">
                      <label for="classdescription">Destacado</label>
                      <input type="text" name="destacado" class="form-control" id="destacado" placeholder="Descripción de la clase">
                    </div>
                    <div class="form-group">
                      <label for="classdescription">Nuevo</label>
                      <input type="text" name="nuevo" class="form-control" id="nuevo" placeholder="Descripción de la clase">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Crear clase</button>
                    <button class="btn btn-light" name="back">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
        <?php include('../componentes/footer.php');?>
      </div>
    </div>
  </div>
  <?php include('../componentes/integrations.php');?>
</body>

</html>

