<?php

include('../config/db.php');

$search = $_POST['search'];
if(!empty($search)) {
  $search_query = "SELECT * FROM products WHERE nombre LIKE LOWER('%".$search."%') OR restaurante LIKE LOWER('%".$search."%')";
  $result = mysqli_query($connection, $search_query);

  
  if(!$result) {
    die('Query Error' . mysqli_error($connection));
  }
  
  while($row = mysqli_fetch_array($result)) {
 ?>
<div class="card_search">
  <div class="img">
    <img src="<?php echo $row['img']?>" alt="<?php echo $row['nombre']?>">
  </div>
  <div class="text_search">
    <?php if($row['off'] == 1){?>
    <p style="margin-top: -10px; margin-bottom: 5px; width: 100%;"><span id="off_day">En oferta</span></p>
    <?php }?>
    <h5><?php echo $row['nombre']?></h5>
    <p><?php echo number_format($row['precio'], 0, '', '.')?></p> 
    </div>
    <div class="btn_options">
      <a id="categ" style="padding-top: 4px;" href="#<?php echo $row['categoria']?>">Ver producto</a>
    </div>
</div> 
<?php }} ?>
