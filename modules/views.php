<template id="menu">
    <!--desayunos-->
    <div class="card-slider">
    <div class="card-title">
        <h3>Desayunos</h3>
    </div> 
    <div class="slider">
      <?php $desayuno = "SELECT * FROM products WHERE categoria LIKE 'desayunos'";
            $resultado_desayuno = mysqli_query($connection, $desayuno);                 
            while($row = mysqli_fetch_array($resultado_desayuno)) { ?>
        <div class="card_search">
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
        </div> 
        <?php }?>    
    </div>
    </div>
    <!--entradas-->
    <div class="card-slider">
    <div class="card-title">
        <h3>Entradas</h3>
    </div> 
    <div class="slider">
      <?php $entradas = "SELECT * FROM products WHERE categoria LIKE 'entradas'";
            $resultado_entradas = mysqli_query($connection, $entradas);                 
            while($row = mysqli_fetch_array($resultado_entradas)) { ?>
        <div class="card_search">
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
        </div> 
        <?php }?>    
    </div>
    </div>
    <!--platos fuertes-->
    <div class="card-slider">
    <div class="card-title">
        <h3>Platos Fuertes</h3>
    </div> 
    <div class="slider">
      <?php $plato_fuerte = "SELECT * FROM products WHERE categoria LIKE 'platos_fuertes'";
            $resultado_plato_fuerte = mysqli_query($connection, $plato_fuerte);                 
            while($row = mysqli_fetch_array($resultado_plato_fuerte)) { ?>
        <div class="card_search">
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
        </div> 
        <?php }?>    
    </div>
    </div>
    <!--postres-->
    <div class="card-slider">
    <div class="card-title">
        <h3>Postres</h3>
    </div> 
    <div class="slider">
      <?php $postres = "SELECT * FROM products WHERE categoria LIKE 'postres'";
            $resultado_postres = mysqli_query($connection, $postres);                 
            while($row = mysqli_fetch_array($resultado_postres)) { ?>
        <div class="card_search">
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
        </div> 
        <?php }?>    
    </div>
    </div>
    <!--bebidas-->
    <div class="card-slider">
        <div class="card-title">
            <h3>Bebidas</h3>
        </div> 
        <div class="slider">
        <?php $bebidas = "SELECT * FROM products WHERE categoria LIKE 'bebidas'";
        $resultado_bebidas = mysqli_query($connection, $bebidas);                 
        while($row = mysqli_fetch_array($resultado_bebidas)) { ?>
        <div class="card_search">
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
        </div> 
        <?php }?>    
        </div>
    </div>
    <!--licores-->
    <div class="card-slider">
        <div class="card-title">
            <h3>Licores</h3>
        </div> 
        <div class="slider">
            <?php $desayuno = "SELECT * FROM products WHERE categoria LIKE 'licores'";
            $resultado_desayuno = mysqli_query($connection, $desayuno);                 
            while($row = mysqli_fetch_array($resultado_desayuno)) { ?>
            <div class="card_search">
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
            </div> 
            <?php }?>    
        </div>
    </div>
    <!--otros-->
        <div class="card-slider">
        <div class="card-title">
            <h3>Otros Platillos</h3>
        </div> 
        <div class="slider">
            <?php $otros = "SELECT * FROM products WHERE categoria LIKE 'platos_fuertes'";
            $resultado_otros = mysqli_query($connection, $otros);                 
            while($row = mysqli_fetch_array($resultado_otros)) { ?>
            <div class="card_search">
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
            </div> 
            <?php }?>    
        </div>
        </div>
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
    </script>
</template>

<template id="reviews">
    <div class="wrapper_res">
    <?php 
    $reseña = "SELECT * FROM reseñas";
    $resultado_reseña = mysqli_query($connection, $reseña);  
    $user = "SELECT * from users";
    $resultado_user = mysqli_query($connection, $user); 
    while($row_user = mysqli_fetch_array($resultado_user)){
    while($row = mysqli_fetch_array($resultado_reseña)) { ?>
    <div class="box">
      <span class="material-icons" style="transform: scaleX(-1);">format_quote</span>
      <p><?php echo $row['reseña']?></p>
      <div class="content">
        <div class="info">
          <div class="name"><?php echo $row['usuario']?></div>
          <div class="job"><?php echo $row['producto']?></div>
          <div class="stars">
            <?php switch($row['calificacion']){
                case 1: 
                    echo '<span id="yellow" class="material-icons">star</span>';
                    break;
                case 2:
                    echo '<span id="yellow" class="material-icons">star</span>';
                    echo '<span id="yellow" class="material-icons">star</span>';
                    break;
                case 3:
                    echo '<span id="yellow" class="material-icons">star</span>';
                    echo '<span id="yellow" class="material-icons">star</span>';
                    echo '<span id="yellow" class="material-icons">star</span>';
                    break;
                case 4:
                    echo '<span id="yellow" class="material-icons">star</span>';
                    echo '<span id="yellow" class="material-icons">star</span>';
                    echo '<span id="yellow" class="material-icons">star</span>';
                    echo '<span id="yellow" class="material-icons">star</span>';
                    break;
                case 5:
                    echo '<span id="yellow" class="material-icons">star</span>';
                    echo '<span id="yellow" class="material-icons">star</span>';
                    echo '<span id="yellow" class="material-icons">star</span>';
                    echo '<span id="yellow" class="material-icons">star</span>';
                    echo '<span id="yellow" class="material-icons">star</span>';
                    break;
            }
            ?>
          </div>
        </div>
        <div class="image">
          <img src="<?php echo $row_user['img']?>" alt="<?php echo $row['usuario']?>">
        </div>
      </div>
    </div>
    <?php }}?>  
  </div>
</template>

<template id="desayunos">
    <div class="card-slider">
    <div class="card-title">
        <h3>Desayunos</h3>
    </div> 
    <div class="slider">
      <?php $desayuno = "SELECT * FROM products WHERE categoria LIKE 'desayunos'";
            $resultado_desayuno = mysqli_query($connection, $desayuno);                 
            while($row = mysqli_fetch_array($resultado_desayuno)) { ?>
        <div class="card_search">
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
        </div> 
        <?php }?>    
    </div>
    </div>

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
    </script>

</template>

<template id="entradas">
    <div class="card-slider">
    <div class="card-title">
        <h3>Entradas</h3>
    </div> 
    <div class="slider">
      <?php $entradas = "SELECT * FROM products WHERE categoria LIKE 'entradas'";
            $resultado_entradas = mysqli_query($connection, $entradas);                 
            while($row = mysqli_fetch_array($resultado_entradas)) { ?>
        <div class="card_search">
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
        </div> 
        <?php }?>    
    </div>
    </div>

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
    </script>

</template>

<template id="platos_fuertes">
    <div class="card-slider">
    <div class="card-title">
        <h3>Platos Fuertes</h3>
    </div> 
    <div class="slider">
      <?php $plato_fuerte = "SELECT * FROM products WHERE categoria LIKE 'platos_fuertes'";
            $resultado_plato_fuerte = mysqli_query($connection, $plato_fuerte);                 
            while($row = mysqli_fetch_array($resultado_plato_fuerte)) { ?>
        <div class="card_search">
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
        </div> 
        <?php }?>    
    </div>
    </div>

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
    </script>

</template>

<template id="postres">
    <div class="card-slider">
    <div class="card-title">
        <h3>Postres</h3>
    </div> 
    <div class="slider">
      <?php $postres = "SELECT * FROM products WHERE categoria LIKE 'postres'";
            $resultado_postres = mysqli_query($connection, $postres);                 
            while($row = mysqli_fetch_array($resultado_postres)) { ?>
        <div class="card_search">
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
        </div> 
        <?php }?>    
    </div>
    </div>

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
    </script>

</template>

<template id="bebidas">
    <div class="card-slider">
        <div class="card-title">
            <h3>Bebidas</h3>
        </div> 
    <div class="slider">
        <?php $bebidas = "SELECT * FROM products WHERE categoria LIKE 'bebidas'";
        $resultado_bebidas = mysqli_query($connection, $bebidas);                 
        while($row = mysqli_fetch_array($resultado_bebidas)) { ?>
        <div class="card_search">
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
        </div> 
        <?php }?>    
        </div>
    </div>

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
    </script>

</template>

<template id="licores">
    <div class="card-slider">
        <div class="card-title">
            <h3>Licores</h3>
        </div> 
        <div class="slider">
            <?php $desayuno = "SELECT * FROM products WHERE categoria LIKE 'licores'";
            $resultado_desayuno = mysqli_query($connection, $desayuno);                 
            while($row = mysqli_fetch_array($resultado_desayuno)) { ?>
            <div class="card_search">
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
            </div> 
            <?php }?>    
        </div>
    </div>

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
    </script>

</template>

<template id="otros">
    <div class="card-slider">
        <div class="card-title">
            <h3>Otros Platillos</h3>
        </div> 
        <div class="slider">
            <?php $otros = "SELECT * FROM products WHERE categoria LIKE 'platos_fuertes'";
            $resultado_otros = mysqli_query($connection, $otros);                 
            while($row = mysqli_fetch_array($resultado_otros)) { ?>
            <div class="card_search">
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
            </div> 
            <?php }?>    
        </div>
    </div>

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
    </script>

</template>


