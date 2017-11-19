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
        <!-- Main Carousel -->
        <div id="mainCarousel" class="carousel slide text-center" data-ride="carousel">
          <h2>Highlights</h2>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid carousel1" src="images/eple_placeholder.jpg" alt="Eple" />
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid carousel1" src="images/appelsin_placeholder.jpg" alt="Appelsin" />
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid carousel1" src="images/pear_placeholder.jpg" alt="Pære" />
            </div>
          </div>
          <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- End of Carousel -->

        <!-- Second Carousel -->
        <div class="container text-center">
          <h2>Frukt</h2>
          <div class="row">
              <div class="col-md-12">
                <div class="carousel slide multi-item-carousel" id="multi-carousel1">
                  <div class="carousel-inner">
                    <div class="item-active">
                      <div class="col-xs-4">
                        <a href="#1" src="images/product_placeholder.jpg" class="img-responsive"></a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="col-xs-4">
                        <a href="#1" src="images/product_placeholder.jpg" class="img-responsive"></a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="col-xs-4">
                        <a href="#1" src="images/product_placeholder.jpg" class="img-responsive"></a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="col-xs-4">
                        <a href="#1" src="images/product_placeholder.jpg" class="img-responsive"></a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="col-xs-4">
                        <a href="#1" src="images/product_placeholder.jpg" class="img-responsive"></a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="col-xs-4">
                        <a href="#1" src="images/product_placeholder.jpg" class="img-responsive"></a>
                      </div>
                    </div>
                    <div class="item">
                      <div class="col-xs-4">
                        <a href="#1" src="images/product_placeholder.jpg" class="img-responsive"></a>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#multi-carousel1" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#multi-carousel1" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
          </div>
        </div>
        <!-- End of second Carousel -->
    </main>
    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <?php include 'templates/footer.php'; ?>
  </body>
</html>
