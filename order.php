<?php session_start();
  require_once 'scripts/db_connecter.php';
  if(!isset($_SESSION['id']) || !isset($_GET['id'])){
    header("Location: index.php");
  }
  $order=$_GET['id'];
  $sql = "SELECT * FROM orders WHERE order_id='".$order."'";

  $result = mysqli_query($link, $sql);
  $currentOrder = mysqli_fetch_assoc($result);
  $items = explode("€", $currentOrder['items']);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/master.css">
    <title>Nettbutikk</title>
  </head>
  <body>
    <?php include 'templates/navbar.php'; ?>
    <main class="container">
      <h3>Ordernumber: <?php echo $currentOrder['order_id']; ?></h3>
      <div class="container py-2">
        <div class="row">
          <div class="col-3 col-sm-2 col-md-1 pr-0 pr-sm-1">
          </div>
          <div class="col-4 col-sm-5 col-md-8 pl-0 pl-sm-1">
            <h5>Products</h5>
          </div>
          <div class="col-2 col-sm-2 col-md-1">
            Amount
          </div>
          <div class="col-2 col-sm-2 col-md-1">
            Price
          </div>
        </div>
      </div>
      <!-- Sample product -->
      <?php

      for ($i=0; $i < sizeof($items); $i++) {
        echo'
        <div class="container products-row py-2">
          <div class="row">
            <div class="col-3 col-sm-2 col-md-1 pr-0 pr-sm-1">
              <img src="images/product_placeholder.jpg" class="img-thumbnail img-products">
            </div>
            <div class="col-4 col-sm-5 col-md-8 pl-0 pl-sm-1">
              <h6>'.$items[$i].'</h6>
              <p class="products-description text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis rhoncus risus at tristique.</p>
            </div>
            <div class="col-2 col-sm-2 col-md-1">1</div>
            <div class="col-2 col-sm-2 col-md-1">
              100$
            </div>
          </div>
        </div>';
      }
       ?>
      <!-- Sample product end -->
      <div class="container py-2">
        <div class="row">
          <div class="col-3 col-sm-2 col-md-1 pr-0 pr-sm-1">
          </div>
          <div class="col-4 col-sm-5 col-md-8 pl-0 pl-sm-1">
            <h5>Total</h5>
          </div>
          <div class="col-2 col-sm-2 col-md-1">
          </div>
          <div class="col-2 col-sm-2 col-md-1">
            <h5>400$</h5>
          </div>
        </div>
      </div>
    </main>
    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <?php include 'templates/footer.php'; ?>
  </body>
</html>
