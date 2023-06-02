<?php 
$url = $_SERVER['HTTP_REFERER'];
?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <?php if($role == 'admin'){?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#sistema" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Sistema</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sistema">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="views/404.html">Configuraciones</a></li>
                <li class="nav-item"> <a class="nav-link" href="views/404.html">Mantenimiento</a></li>
                <li class="nav-item"> <a class="nav-link" href="views/404.html">Desarrollo</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Usuarios</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="modulos/newaccount.php">Crear cuenta</a></li>
                <li class="nav-item"><a class="nav-link" href="modulos/manageusers.php">Gestionar Usuarios</a></li>
                <li class="nav-item"><a class="nav-link" href="views/404.html">Bloquear usuarios</a></li>
              </ul>
            </div>
          </li>
          <?php } if($role == 'contratista' | $role == 'admin'){?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#products" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Productos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="modulos/newclass.php">agregar productos</a></li>
                <li class="nav-item"><a class="nav-link" href="modulos/manageclass.php">Gestionar productos</a></li>
                <li class="nav-item"><a class="nav-link" href="views/404.html">Agregar ofertas</a></li>
                <li class="nav-item"><a class="nav-link" href="views/404.html">Gestionar ofertas</a></li>
              </ul>
            </div>
          </li>
          <?php } if($role == 'contratista' | $role == 'admin'){?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Contratistas</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="modulos/newclass.php">Agregar productos</a></li>
                <li class="nav-item"> <a class="nav-link" href="modulos/manageclass.php">Gestionar productos</a></li>
                <li class="nav-item"><a class="nav-link" href="views/404.html">Agregar Ofertas</a></li>
                <li class="nav-item"><a class="nav-link" href="views/404.html">Agregar trabajadores</a></li>
                <li class="nav-item"><a class="nav-link" href="views/404.html">Gestionar trabajadores</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="views/404.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Reportes</span>
            </a>
          </li>
          <?php }?>
        </ul>
      </nav>