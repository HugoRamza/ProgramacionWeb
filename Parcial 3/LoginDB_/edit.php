<?php
 include ('config/db.php');

    $id = $_GET['id'];
    $result = mysqli_query($conn,"SELECT * FROM `productos` WHERE  cod_producto = '$id'");
    $row = mysqli_fetch_assoc($result);
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       $product = $_POST['producto'];
        $resultt = mysqli_query($conn,"update producto set producto = '$producto' where cod_producto = '$id'");
        if($resultt){
        header('location: index.php');
        }
    }

 ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Crud</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
    .n{
        margin-top: 100px;
    }
</style>   
  </head>
  <body>
      <div class="container n">
      <div class="row">
      <div class="col-xs-12 col-lg-3">
      <form action="add.php" method="POST">
      <h1 class="text-center"><strong>Producto</strong></h1>
      <br>
      <input type="text" value="<?php echo $row['producto']?>" class="form-control"  placeholder="producto" required name="producto" >
      <br>
     <input type="submit" value="Agregar" class="btn btn-primary btn-block">
      </form>
      </div>
 


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>