<?php

include 'scripts/db_connecter.php';
session_start();
$products=array();

//Checks for parameteres from request
if (isset($_GET['type'])) {
  $type=$_GET['type'];
  $sql = "SELECT * FROM items WHERE type='$type'";
}
elseif (isset($_GET['producer'])) {
  $producer=$_GET['producer'];
  $sql = "SELECT * FROM items WHERE producer='$producer'";
}
//Search function, matches itemcode, itemname, description, producer or type
//Matches query anywhere in db columns
elseif (isset($_GET['query'])) {
  $query=$_GET['query'];
  $sql = "SELECT * FROM items
  WHERE itemcode LIKE '%$query%'
  OR itemname LIKE '%$query%'
  OR description LIKE '%$query%'
  OR producer LIKE '%$query%'
  OR type LIKE '%$query%'";
}
else {
  header('Location: index.php');
}

//Get result from DB and add it to products array
$result = mysqli_query($link, $sql);
while ($row = mysqli_fetch_assoc($result)) {
  array_push($products, $row);
}

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
      <h1>Products</h1>
      <!-- Sample product listing
      <div class="container products-row py-2">
        <div class="row">
          <div class="col-4 col-sm-3 col-md-2 pr-0 pr-sm-1">
            <img src="images/product_placeholder.jpg" class="img-thumbnail img-products">
          </div>
          <div class="col-4 col-sm-5 col-md-8 pl-0 pl-sm-1">
            <h3>Eple</h3>
            <p class="products-description text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis rhoncus risus at tristique.</p>
            <p>Stock: 10stk</p>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <h4>100,-</h4>
            <form action="#" method="post">
              <input type="number" name="quantity" value="1" class="form-control form-control-sm col-8 col-sm-6 col-lg-4" />
              <button type="submit" class="btn btn-danger mt-2 btn-sm p-1 py-sm-1 px-sm-2">Add to cart</button>
            </form>
          </div>
        </div>
      </div>
        End of sample product listing -->
        <?php
        //Add all products as a row on page
        for ($i=0; $i < sizeof($products) ; $i++) {
          echo
          '
          <div class="container products-row py-2">
            <div class="row">
              <div class="col-4 col-sm-3 col-md-2 pr-0 pr-sm-1">
                <img src="images/'.$products[$i]['picture_name'].'" class="img-thumbnail img-products">
              </div>
              <div class="col-4 col-sm-5 col-md-8 pl-0 pl-sm-1">
                <h3>'.$products[$i]['itemname'].'</h3>
                <p class="products-description text-truncate">'.$products[$i]['description'].'</p>
                <p>Stock: '.$products[$i]['quantity'].'</p>
              </div>
              <div class="col-4 col-sm-4 col-md-2">
                <h4>'.$products[$i]['out_price'].'$</h4>
                <form action="#" method="post">
                  <input type="number" name="quantity" value="1" class="form-control form-control-sm col-8 col-sm-6 col-lg-4" />
                  <input type="hidden" name="itemcode" value="'.$products[$i]['picture_name'].'">
                  <button type="submit" class="btn btn-danger mt-2 btn-sm p-1 py-sm-1 px-sm-2">Add to cart</button>
                </form>
              </div>
            </div>
          </div>
          ';
        }
         ?>
    </main>

    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </script>
    <?php include 'templates/footer.php'; ?>
  </body>
</html>
