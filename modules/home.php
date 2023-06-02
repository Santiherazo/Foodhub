<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>FoodHub</title>
</head>
<?php include('config/db.php');?>
<body>

<!--Header-->
<header>
    <nav>
        <a style="cursor: pointer;" id="home"><h1 id="title">Food<span style="color: #E71D36">HUB</span></h1></a>
        <div class="menu_items" id="menu_items"></div>
        <a id="btn_menu"><span class="material-icons">menu</span></a>
    </nav>
    <div class="menu_reponsive" id="menu_items_responsive"></div>
</header>

<main>
        
<!--Categorias-->
<div class="categories">
    <div class="cat-items"><a href="#desayunos">Desayunos</a></div>
        <div class="cat-items"><a href="#entradas">Entradas</a></div>
        <div class="cat-items"><a href="#platos_fuertes">Platos fuertes</a></div>
        <div class="cat-items"><a href="#postres">Postres</a></div>
        <div class="cat-items"><a href="#bebidas">Bebidas</a></div>
        <div class="cat-items"><a href="#licores">Licores</a></div>
        <div class="cat-items"><a href="#otros">otros</a></div>
    </div>
</div>

<!--Busqueda-->
<div class="search-box">
    <div id="bg">
        <fom class="search_input">
            <input type="search" name="search" id="search" placeholder="¿Que te gustaría comer?">
            <button id="submit" class=""><span class="material-icons">search</span></button>
        </form>
    </div>
</div>

<content class="content">

<!-- Ofertas --> 
<div class="card-slider">
    <div class="card-title">
        <h3>Ofertas</h3>
    </div> 
    <div class="wrapper">
      <a id="left"><span class="material-icons">arrow_back</span></a>
      <ul class="carousel">
      <?php $oferta = "SELECT DISTINCT * FROM products WHERE off like 1 LIMIT 15";
            $resultado_oferta = mysqli_query($connection, $oferta);                 
            while($row = mysqli_fetch_array($resultado_oferta)) { ?>
        <li class="card">
            <div class="img">
                <img src="<?php echo $row['img']?>" alt="<?php echo $row['nombre']?>">
            </div>
            <div class="card_text">
            <?php if($row['off'] == 1){?>
                <?php $descuento = "SELECT * FROM offers";
                      $resultado_descuento = mysqli_query($connection, $descuento);
                      while($row_descuento = mysqli_fetch_array($resultado_descuento)) { ?>
                <?php if($row['cod_off'] == $row_descuento['codigo']){?>
                <h4><?php echo $row['nombre']?></h4>
                <p class="price_after">Antes:<span style="text-decoration-line: line-through; font-size: 14px; margin-left: 3px"> <?php echo number_format($row['precio'], 0, '', '.')?></span> <span id="etiqueta">-<?php echo $row_descuento['descuento']?>%</span></p>
                <P style="margin-top: 2px; font-weight: bold;">Ahora: <?php echo number_format($row['precio'] - ($row_descuento['descuento']*$row['precio'])/100, 0, '', '.')?></P>
            </div>
            <?php }}}?>
            <div class="btn_options">
                <button data-id="<?php echo $row['id']?>">Ver producto</button>
            </div>
        </li> 
        <?php }?>    
      </ul>
      <a id="right"><span class="material-icons">arrow_forward</span></a>
    </div>
</div>

<!--Nuevos lanzamientos-->
<div class="card-slider">
    <div class="card-title">
        <h3>Nuevos lanzamientos</h3>
    </div> 
    <div class="wrapper_new">
      <a id="left_new"><span class="material-icons">arrow_back</span></a>
      <ul class="carousel_new">
      <?php $nuevo = "SELECT DISTINCT * FROM products WHERE nuevo LIKE 1 LIMIT 15";
            $resultado_nuevo = mysqli_query($connection, $nuevo);                 
            while($row = mysqli_fetch_array($resultado_nuevo)) { ?>
        <li class="card_new">
            <div class="img">
                <img src="<?php echo $row['img']?>" alt="<?php echo $row['nombre']?>">
            </div>
            <div class="card_text">
                <?php if($row['off'] == 1){?>
                <p style="margin-top: -10px; margin-bottom: 5px; width: 100%;"><span id="off_day">En oferta</span></p>
                <?php }?>
                <h4><?php echo $row['nombre']?></h4>
                <p><?php echo number_format($row['precio'], 0, '', '.')?></p> 
            </div>
            <div class="btn_options">
                <button id="<?php echo $row['id']?>" data-id="<?php echo $row['id']?>">Ver producto</button>
            </div>
        </li> 
        <?php }?>    
      </ul>
      <a id="right_new"><span class="material-icons">arrow_forward</span></a>
    </div>
</div>

<!--Destacados-->
<div class="card-slider">
    <div class="card-title">
        <h3>Destacados</h3>
    </div> 
    <div class="wrapper_out">
      <a id="left_out"><span class="material-icons">arrow_back</span></a>
      <ul class="carousel_out">
      <?php $Destacado = "SELECT DISTINCT * FROM products WHERE destacado like 1 LIMIT 15";
            $resultado_destacado = mysqli_query($connection, $Destacado);                 
            while($row = mysqli_fetch_array($resultado_destacado)) { ?>
        <li class="card_out">
            <div class="img">
                <img src="<?php echo $row['img']?>" alt="<?php echo $row['nombre']?>">
            </div>
            <div class="card_text">
                <?php if($row['off'] == 1){?>
                <p style="margin-top: -10px; margin-bottom: 5px; width: 100%;"><span id="off_day">En oferta</span></p>
                <?php }?>
                <h4><?php echo $row['nombre']?></h4>
                <p><?php echo number_format($row['precio'], 0, '', '.')?></p> 
            </div>
            <div class="btn_options">
            <button id="<?php echo $row['id']?>" data-id="<?php echo $row['id']?>">Ver producto</button>
            </div>
        </li> 
        <?php }?>    
      </ul>
      <a id="right_out"><span class="material-icons">arrow_forward</span></a>
    </div>
</div>

<!--Nuestra Carta-->
<div class="card-slider">
    <div class="card-title">
        <h3>Nuestra carta</h3>
    </div> 
    <div class="wrapper_prod">
      <a id="left_prod"><span class="material-icons">arrow_back</span></a>
      <ul class="carousel_prod">
      <?php $productos = "SELECT DISTINCT * FROM products WHERE tipo like 'comida' LIMIT 20";
            $resultado_productos = mysqli_query($connection, $productos);                 
            while($row = mysqli_fetch_array($resultado_productos)) { ?>
        <li class="card_prod">
            <div class="img">
                <img src="<?php echo $row['img']?>" alt="<?php echo $row['nombre']?>">
            </div>
            <div class="card_text">
                <?php if($row['off'] == 1){?>
                <p style="margin-top: -10px; margin-bottom: 5px; width: 100%;"><span id="off_day">En oferta</span></p>
                <?php }?>
                <h4><?php echo $row['nombre']?></h4>
                <p><?php echo number_format($row['precio'], 0, '', '.')?></p> 
            </div>
            <div class="btn_options">
            <button id="<?php echo $row['id']?>" data-id="<?php echo $row['id']?>">Ver producto</button>
            </div>
        </li> 
        <?php }?>    
      </ul>
      <a id="right_prod"><span class="material-icons">arrow_forward</span></a>
    </div>
</div>

<!--Postres-->
<div class="card-slider">
    <div class="card-title">
        <h3>Postres</h3>
    </div> 
    <div class="wrapper_des">
      <a id="left_des"><span class="material-icons">arrow_back</span></a>
      <ul class="carousel_des">
      <?php $postres = "SELECT * FROM products WHERE categoria LIKE 'Postres' LIMIT 8";
            $resultado_postres = mysqli_query($connection, $postres);                 
            while($row = mysqli_fetch_array($resultado_postres)) { ?>
        <li class="card_des">
            <div class="img">
                <img src="<?php echo $row['img']?>" alt="<?php echo $row['nombre']?>">
            </div>
            <div class="card_text">
                <?php if($row['off'] == 1){?>
                <p style="margin-top: -10px; margin-bottom: 5px; width: 100%;"><span id="off_day">En oferta</span></p>
                <?php }?>
                <h4><?php echo $row['nombre']?></h4>
                <p><?php echo number_format($row['precio'], 0, '', '.')?></p> 
            </div>
            <div class="btn_options">
            <button id="<?php echo $row['id']?>" data-id="<?php echo $row['id']?>">Ver producto</button>
            </div>
        </li> 
        <?php }?>    
      </ul>
      <a id="right_des"><span class="material-icons">arrow_forward</span></a>
    </div>
</div>

<script>
    $(document).ready(function() {
    //Vista de descripcion productos
    $('button').on('click', function() {
        let idButton = $(this).attr('data-id');
        $.ajax({
            url: 'modules/products.php',
            data: { idButton },
            type: 'POST',
            success: function(query) {
                if (!response.error) {
                    $('#content_popup').html(query);
                    $('#overlay').addClass('active');
                    $('#popup').addClass('active');
                }
            }
        })
      });
    });
</script>

</content>

<!--Popup -> vista aumentada de los productos-->
<div class="overlay" id="overlay">
	<div class="popup" id="popup" style="max-width:600px">
		<a id="close" class="close_btn"><span class="material-icons">cancel</span></a>
		<div id="content_popup"></div>
        
	</div>
</div>

<!--Popup -> Busquedas-->
<div class="overlay" id="overlay_search">
	<div class="popup" id="popup_search">
		<a id="close_search" class="close_btn"><span class="material-icons">cancel</span></a>
        <h4>Resultados</h4>
		<div class="popup_content_search" id="response"></div>
	</div>
</div>
</main>

<!--Plantillas-->
<?php include('modules/views.php')?>

<footer>
    <a href="">© 2023 Todos los derechos reservados para Foodhub</a>
</footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
<script src="assets/js/main.js"></script>
<script src="assets/js/wrappers.js"></script>
<script src="assets/js/router.js"></script>
<script>
    $('button').on('click', function() {
        let idButton = $(this).attr('data-id');
        $.ajax({
            url: 'modules/products.php',
            data: { idButton },
            type: 'POST',
            success: function(query) {
                if (!response.error) {
                    $('#content_popup').html(query);
                    $('#overlay').addClass('active');
                    $('#popup').addClass('active');
                }
            }
        })
      });
      
        window.onload = function() {
            window.router.init([{
                path: "/home",
                view: "#home"
            }, {
                path: "/menu",
                view: "#menu"
            },{
                path: "/reviews",
                view: "#reviews"
            },{
                path: "/desayunos",
                view: "#desayunos"
            },{
                path: "/entradas",
                view: "#entradas"
            },{
                path: "/platos_fuertes",
                view: "#platos_fuertes"
            },{
                path: "/postres",
                view: "#postres"
            },{
                path: "/bebidas",
                view: "#bebidas"
            },{
                path: "/licores",
                view: "#licores"
            },{
                path: "/otros",
                view: "#otros"
            }]);
        };
    </script>
</body>
</html>