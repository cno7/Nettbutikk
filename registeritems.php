<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <!-- Custom ccs and javascript. NOT a part of bootstrap -->
    <!--<link rel="stylesheet" type="text/css" href="css/style.css" />-->
    <link rel="stylesheet" href="css/master.css">
    <title>Nettbutikk</title>
  </head>
  <body>
    <?php include 'templates/navbar.php'; ?>
    <div class="container">
        <div class="row">
          <div class="col col-8">
              <h3>Registrer shit her</h3>
              <form class="" action="scripts/reg_product_db.php" method="post">
                  Itemcode:
                  <input type="text" name="item_code" value="">
                  </br>
                  Itemname:
                  <input type="text" name="item_name" value="">
                  </br>
                  Quantity:
                  <input type="text" name="quantity" value="">
                  </br>
                  Description:
                  <input type="text" name="description" value="">
                  </br>
                  Amount Sold:
                  <input type="number" name="amount_sold" min="0" value="0">
                  </br>
                  Producer:
                  <input type="text" name="producer" value="">
                  </br>
                  Type:
                  <input type="text" name="type" value="">
                  </br>
                  In Price:
                  <input type="number" name="in_price" min="0" value="">
                  </br>
                  Out Price:
                  <input type="number" name="out_price" min="0" value="">
                  </br>
                  Gross Profit:
                  <input type="number" name="gross_profit" min="0" value="">
                  </br>
                  Profit:
                  <input type="number" name="profit" min="0" value="">
                  </br>
                  Picture Name:
                  <input type="text" name="picture_name" value="">
                  </br>
                  <button type="submit" name="button">Add item to database</button>
              </form>
          </div>
          <div class="col col-4">
              Oversikt over varer som er registrert her i en liste
          </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <?php include 'templates/footer.php'; ?>
</body>
</html>
