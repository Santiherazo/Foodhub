<?php 
session_start();
$role = $_SESSION['role'];

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
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Gestor de Clases</h4>
                  <p class="card-description">
                    Gestiona las clases creadas
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Nombre
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Role
                          </th>
                          <th>
                            Estado
                          </th>
                          <th>
                            Acción
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        require('../../includes/db.php');

                        $query = "SELECT * FROM users";
                        $result = mysqli_query($db, $query);
                        while($row = mysqli_fetch_array($result)){     ?>       
                        <tr>
                          <td>
                          <?php echo $row['username'];?>
                          </td>
                          <td>
                          <?php echo $row['email'];?>
                          </td>
                          <td>
                          <?php echo $row['role'];?>
                          </td>
                          <td>
                          <?php echo $row['status'];?>
                          </td>
                          <td>
                            <a href="useredit.php?id=<?php echo $row['id']?>">Editar</a>
                            <a href="userdelete.php?id=<?php echo $row['id']?>">Eliminar</a>
                          </td>
                        </tr>
                        <?php }?>
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include('../componentes/footer.php') ?>
      </div>
    </div>
  </div>
  <?php include('../componentes/integrations.php') ?>
</body>
</html>
