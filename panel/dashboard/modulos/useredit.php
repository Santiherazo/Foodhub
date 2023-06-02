<?php
require('../../includes/db.php');

if(isset($_GET['id'])){
    $id_user = $_GET['id'];

    $query = "SELECT * FROM users WHERE id = $id_user";
    $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);
        if(mysqli_num_rows($result)){
        $cname = $row['username'];
        $cemail = $row['email'];
        $crole = $row['role'];
        $cstatus = $row['status'];
        }
    }

    if(isset($_POST['back'])){
        header("location: ../index.php");
    }

    if(isset($_POST['update'])){
        $id_user = $_GET['id'];
        $name = $_POST['name'];
        $email=$_POST['email'];
        $password = $_POST['password'];
        $pass = sha1($password);
        $role = $_POST['role'];
        $status = $_POST['status'];

        $query_udpdate = "UPDATE users SET username = '$name', email = '$email', password = '$pass', status = '$status', role= '$role' WHERE id = '$id_user'";
        $result_update = mysqli_query($db, $query_udpdate);

        header("location: manageusers.php");
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
  <title>Editar cuenta</title>
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
                  <h4 class="card-title">Registrar una cuenta</h4>
                  <p class="card-description">
                    Crea cuentas para nuevos usuarios
                  </p>
                  <form class="forms-sample" method="POST" action="useredit.php?id=<?php echo $_GET['id']?>">
                    <div class="form-group">
                      <label for="classname">Nombre</label>
                      <input type="text" name="name" class="form-control" id="classname" value="<?php echo $cname?>" placeholder="Actualice su nombre">
                    </div>
                    <div class="form-group">
                      <label for="classdescription">email</label>
                      <input type="email" name="email" class="form-control" id="classdescription" value="<?php echo $cemail?>" placeholder="Actualice su correo">
                    </div>
                    <div class="form-group">
                      <label for="classname">Contraseña</label>
                      <input type="text" name="password" class="form-control" id="classname" placeholder="Actualice su Contraseña">
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
                    <button type="submit" name="update" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light" name="back">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
        <?php include('../componentes/footer.php');?>
        </footer>
      </div>
    </div>
  </div>
  <?php include('../componentes/integrations.php');?>
</body>

</html>

