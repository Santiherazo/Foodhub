<?php 
 require('../../includes/db.php');

 if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($db, $query);

    if(!$result){
        die("Query Failed");
    }


    header("location: manageusers.php");
 }
 


?>