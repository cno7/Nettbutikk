<?php session_start(); ?>
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
      <h4 class="ml-3">Dan Børge Akerø</h4 >
      <div class="row mt-3">
        <div class="col-12 col-lg-6">
          <div class="ml-5">
            <h3>Profile page</h3>
            <h6>Customer ID: 12345</h6>
            <h6>Name: Dan Børge Akerø</h6>
            <h6>Email: dan.børge@kerø.no</h6>
            <h6>Phone: 12345678</h6>
            <h6>Adress: Gjørmevegen 7</h6>
            <h6>Zipcode: 5465 Halden</h6>
            <h6>Password: ole123</h6>
            <div class="col-7 float-right">
              <form action="my_page.php" class="form-inline ml-5 mt-5">
                <button type="submit" class="btn btn-danger">Edit info</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <h3>Order history</h3>
          <ul class="nav flex-column">
            <li class="order-item nav-item">
              <a class="nav-link" href="urge.php">Orderno: 128371982 &emsp; Date: 24.12.2017 &emsp; Price: 60000,-</a>
            </li>
          </ul>
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
