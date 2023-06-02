<?php
session_start();

if(!isset($_SESSION['id'])){
  header("location: index.php");
}

$nombre = $_SESSION['user'];
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Panel Principal</title>
  <?php include('componentes/head.php');?>
</head>
<body>
  <div class="container-scroller">
    <?php include('componentes/header.php');?>
    <div class="container-fluid page-body-wrapper">
      <?php include('componentes/nav.php');?>
      <div class="main-panel">
        <div class="content-wrapper">
          <?php
          switch($role){
            case 'admin':
              include('views/admin.php');
              break;
            case 'user':
              include('views/profesor.php');
              break;
            case 'contratista': 
              include('views/estudiante.php');
              break;
          }
          ?>
          <?php include('componentes/footer.php');?>
      </div>
    </div>
  </div>
  <?php include('componentes/integrations_panel.php');?>
</body>
</html>

