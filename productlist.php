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
      <!-- Products menu for mobile -->
      <div id="productsMenu" class="panel panel-default panel-collapse collapse d-md-none">
        <div class="container">
          <ul class="nav flex-column">
            <li class="nav-item nav-prod">
              <a class="nav-link" href="urge.php">Sukkerfri Urge</a>
            </li>
            <li class="nav-item nav-prod">
              <a class="nav-link" href="annet.php">Annet</a>
            </li>
          </ul>
        </div>
      </div>
      <!-- End of products menu for mobile -->
      <h1>Products</h1>
      <!-- Sample product listing -->
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
      <!-- End of sample product listing -->
    </main>

    <!--Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="jq.js">
    </script>
    <?php include 'templates/footer.php'; ?>
  </body>
</html>