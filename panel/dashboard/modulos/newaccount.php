<?php
require('../../../config/db.php');

session_start();

if(!isset($_SESSION['id'])){
  header("location: index.php");
}

$role = $_SESSION['role'];

if(isset($_POST['back'])){
  header("location: ../index.php");
}

if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$pass = sha1($password);
$role = $_POST['role'];
$status = $_POST['status'];

$query = "INSERT INTO products(username, email,password,status,role) VALUES ('$name','$email','$pass','$status','$role')";
$result = mysqli_query($connection, $query);

header("location: manageusers.php");
}?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registrar nueva cuenta</title>
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
                  <h4 class="card-title">Registrar nueva cuenta</h4>
                  <form class="forms-sample" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div class="form-group">
                      <label for="classname">Nombre</label>
                      <input type="text" name="name" class="form-control" id="classname" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                      <label for="classdescription">email</label>
                      <input type="email" name="email" class="form-control" id="classdescription" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="classname">Contraseña</label>
                      <input type="text" name="password" class="form-control" id="classname" placeholder="Password">
                    </div>
                    <div class="form-group">
                    <label>Ocupación</label>
                    <select class="form-control" name="role">
                    <?php
                      $query2 = "SELECT * FROM roles";
                      $result2 = mysqli_query($db, $query2);
                      while($row=mysqli_fetch_array($result2)){?>
                      <option value="<?php echo $row['role_id']?>"><?php echo $row['name'];?></option>
                      <?php }?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Estado</label>
                    <select class="form-control" name="status">
                    <?php
                      $query3 = "SELECT * FROM estado";
                      $result3 = mysqli_query($db, $query3);
                      while($row=mysqli_fetch_array($result3)){?>
                      <option value="<?php echo $row['status_id'];?>"><?php echo $row['estado'];?></option>
                      <?php }?>
                    </select>
                  </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Crear cuenta</button>
                    <button class="btn btn-light" name="back">Cancelar</button>
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

