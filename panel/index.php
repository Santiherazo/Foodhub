<?php 
require('../config/db.php');

session_start();

if($_POST){
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$query = "SELECT * FROM users WHERE user='$usuario'";
$result = mysqli_query($connection, $query);

$num = $result->num_rows;

if($num>0){
    $row = $result->fetch_assoc();
    $pass_db = $row['password'];
    $pass_c = sha1($pass);

    if($pass_db == $pass_c){
        $_SESSION['id'] = $row['id'];
        $_SESSION['nombre'] = $row['user'];
        $_SESSION['role'] = $row['role'];

        header("location: dashboard");
    }else{ echo 'La contraseña es incorrecta';}
  }else{ echo 'El usuario no existe'; }
}?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Inicio de Sesión</title>
  <link rel="stylesheet" href="assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <h2>Foodhub</h2>
              </div>
              <h4>Bienvenido a Foodhub Panel</h4>
              <form class="pt-3" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                  <input type="text" name="usuario" class="form-control form-control-lg" id="userinput" placeholder="Nombre de Usuario">
                </div>
                <div class="form-group">
                  <input type="password" name="pass" class="form-control form-control-lg" id="userpass" placeholder="Contraseña">
                </div>
                <div class="mt-3">
                  <button type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Iniciar Sesión</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Guardar sesión
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">¿Olvidaste tu contraseña?</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  ¿No tienes cuenta? <a href="#" class="text-primary">Registrate aquí</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
</body>
</html>
