<?php
include('../config/db.php');

$idButton = $_POST['idButton'];
if(!empty($idButton)) {
  $query = "SELECT * FROM products WHERE id LIKE $idButton";
  $result = mysqli_query($connection, $query);

  $check = "SELECT producto, calificacion FROM reseñas";
  $result_check = mysqli_query($connection, $check);
  while($row_check = mysqli_fetch_assoc($result_check)){
    $reviews[] = $row_check;
  }

  $suma = 0;
  $calificaciones = 0;
  $active = 0; 

  while($row = mysqli_fetch_array($result)) {
    $product = $row['nombre'];
    foreach($reviews as $review){
      if($review['producto'] == $product){
        $size[] = $review['calificacion'];
        $calificaciones = count($size);
        $suma = $suma + $review['calificacion'];
      }}

      $prom = number_format($suma/count($reviews), 0, '', '');
 ?>
<h4><?php echo $row['restaurante']?></h4>
<div class="product_view">
  <img id="img_view" src="<?php echo $row['img']?>" alt="<?php echo $row['nombre']?>">
  <div class="info">
    <h3 id="v_title"><?php echo $row['nombre']?></h3>
    <p id="v_description"><?php echo $row['descripcion']?></p>
    <p id="v_precio">$ <?php echo number_format($row['precio'], 0, '', '.')?></p>
    <?php if($prom == 0){?>
      <div class="v_clas">
      <span id="v_cal">No tiene calificación</span>
      <span id="v_res">(<?php echo $calificaciones?> Reseñas)</span>
    </div>
    <?php } ?>
    <?php if($prom == 1){?>
    <div class="v_clas">
      <div class="stars">
        <span id="yellow" class="material-icons">star</span>
      </div>
      <span id="v_res">(<?php echo $calificaciones?> Reseñas)</span>
    </div>
    <?php }?>
    <?php if($prom == 2){?>
      <div class="v_clas">
      <div class="stars">
        <span id="yellow" class="material-icons">star</span>
        <span id="yellow" class="material-icons">star</span>
      </div>
      <span id="v_res">(<?php echo $calificaciones?> Reseñas)</span>
    </div>
    <?php }?>
    <?php if($prom == 3){?>
      <div class="v_clas">
      <div class="stars">
        <span id="yellow" class="material-icons">star</span>
        <span id="yellow" class="material-icons">star</span>
        <span id="yellow" class="material-icons">star</span>
      </div>
      <span id="v_res">(<?php echo $calificaciones?> Reseñas)</span>
    </div>
    <?php }?>
    <?php if($prom == 4){?>
      <div class="v_clas">
      <div class="stars">
        <span id="yellow" class="material-icons">star</span>
        <span id="yellow" class="material-icons">star</span>
        <span id="yellow" class="material-icons">star</span>
        <span id="yellow" class="material-icons">star</span>
      </div>
      <span id="v_res">(<?php echo $calificaciones?> Reseñas)</span>
    </div>
    <?php }?>
    <?php if($prom == 5){?>
      <div class="v_clas">
      <div class="stars">
        <span id="yellow" class="material-icons">star</span>
        <span id="yellow" class="material-icons">star</span>
        <span id="yellow" class="material-icons">star</span>
        <span id="yellow" class="material-icons">star</span>
        <span id="yellow" class="material-icons">star</span>
      </div>
      <span id="v_res">(<?php echo $calificaciones?> Reseñas)</span>
    </div>
    <?php }?>
    </div>
</div>
<?php }}?>
