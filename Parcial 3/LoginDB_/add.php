<?php

 include ('config/db.php');

 if(!empty($_POST['producto'])){

  $producto = $_POST['producto'];
  
  $query = mysqli_query($conn,"INSERT INTO productos (producto) VALUES ('$producto')");
  
  if($query){
      header('location:index.php');
  }
}
?>