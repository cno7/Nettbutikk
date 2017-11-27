<?php

session_start();
if($_SESSION['usergroup'] != 2 || !isset($_SESSION['usergroup'])){
  header("Location: index.php");
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
    <!-- Custom ccs and javascript. NOT a part of bootstrap -->
    <link rel="stylesheet" href="css/master.css">
    <title>Nettbutikk</title>
  </head>
  <body>
    <?php include 'templates/navbar.php'; ?>
    <div class="container">
        <div class="row">
          <div class="col col-8">
              <h3>Register new item</h3>
              <form class="" action="scripts/reg_product_db.php" method="post">
                  <label class="registerLabel">Itemcode:</label>
                  <input type="text" class="inputField" name="item_code" value="">
                  </br>
                  <label class="registerLabel">Itemname:</label>
                  <input type="text" class="inputField" name="item_name" value="">
                  </br>
                  <label class="registerLabel">Quantity:</label>
                  <input type="text" class="inputField" name="quantity" value="">
                  </br>
                  <label class="registerLabel">Description:</label>
                  <input type="text" class="inputField" name="description" value="">
                  </br>
                  <label class="registerLabel">Amount Sold:</label>
                  <input type="number" class="inputField" name="amount_sold" min="0" value="0">
                  </br>
                  <label class="registerLabel">Producer:</label>
                  <input type="text" class="inputField" name="producer" value="">
                  </br>
                  <label class="registerLabel">Type:</label>
                  <input type="text" class="inputField" name="type" value="">
                  </br>
                  <label class="registerLabel">In Price:</label>
                  <input type="number" class="inputField" name="in_price" min="0" value="">
                  </br>
                  <label class="registerLabel">Out Price:</label>
                  <input type="number" class="inputField" name="out_price" min="0" value="">
                  </br>
                  <label class="registerLabel">Gross Profit:</label>
                  <input type="number" class="inputField" name="gross_profit" min="0" value="">
                  </br>
                  <label class="registerLabel">Profit:</label>
                  <input type="number" class="inputField" name="profit" min="0" value="">
                  </br>
                  <label class="registerLabel">Picture Name:</label>
                  <input type="text" class="inputField" name="picture_name" value="">
                  </br>
                  <label class="registerLabel"></label>
                  <button type="submit" style="width: 170px;" name="button">Add item to database</button>
              </form>
          </div>
          <div class="col col-4">
              <h3>Items in the database</h3>
          </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <?php include 'templates/footer.php'; ?>
</body>
</html>
