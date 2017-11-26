<?php
include 'scripts/db_connecter.php';
session_start();
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
        <!-- Main Carousel -->
        <div id="mainCarousel" class="carousel slide text-center" data-ride="carousel">
          <h2>Highlights</h2>
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <a href="productpage.php?product=eple">
                  <img class="d-block img-fluid carousel1" src="images/product_placeholder.jpg" alt="Eple" />
                  <div class="carousel-caption">
                    <h4>Eple</h4>
                    <p>Supersøtt eple</p>
                  </div>
                </a>
              </div>
            <div class="carousel-item">
              <a href="productpage.php?product=appelsin">
                <img class="d-block img-fluid carousel1" src="images/orange_placeholder.jpg" alt="Appelsin" />
                <div class="carousel-caption">
                  <h4>Appelsin</h4>
                  <p>Superorange appelsin</p>
                </div>
              </a>
            </div>
            <div class="carousel-item">
              <a href="productpage.php?product=pære">
                <img class="d-block img-fluid carousel1" src="images/pear_placeholder.jpg" alt="Pære" />
                <div class="carousel-caption">
                  <h4>Pære</h4>
                  <p>Helt jævlig pære</p>
                </div>
              </a>
            </div>
            <div class="carousel-item">
              <a href="productpage.php?product=banan">
                <img class="d-block img-fluid carousel1" src="images/banana_placeholder.jpg" alt="Banan" />
                <div class="carousel-caption">
                  <h4>Banan</h4>
                  <p>Gul banan</p>
                </div>
              </a>
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
        <div class="container-fluid text-center mt-4">
          <a href="productlist.php?type=Fruit" class="title-container">
            <h2>Fruit</h2>
          </a>
        </div>
        <!-- First row -->
        <div class="container-fluid">
          <div class="col-12 items-wrapper">
            <div class="row">
              <!-- item -->
              <div class="col-3 item-container">
                <div class="item">
                  <a class="image-container" href="#">
                    <div class="image-wrapper">
                      <img class="image" src="images/product_placeholder.jpg" alt="product" />
                    </div>
                  </a>
                  <div class="content-block">
                    <a class="text-container" href="#">
                      <div class="text-content">
                        <h4>Eple</h4>
                        <p>Lorem ipsum</p>
                      </div>
                    </a>
                    <div class="box-bottom">
                      <div class="price-wrapper">
                        <span class="text-align-right">10,-</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- item -->
              <div class="col-3 item-container">
                <div class="item">
                  <a class="image-container" href="#">
                    <div class="image-wrapper">
                      <img class="image" src="images/product_placeholder.jpg" alt="product" />
                    </div>
                  </a>
                  <div class="content-block">
                    <a class="text-container" href="#">
                      <div class="text-content">
                        <h4>Eple</h4>
                        <p>Lorem ipsum</p>
                      </div>
                    </a>
                    <div class="box-bottom">
                      <div class="price-wrapper">
                        <span class="text-align-right">10,-</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-3 item-container">
                <div class="item">
                  <a class="image-container" href="#">
                    <div class="image-wrapper">
                      <img class="image" src="images/product_placeholder.jpg" alt="product" />
                    </div>
                  </a>
                  <div class="content-block">
                    <a class="text-container" href="#">
                      <div class="text-content">
                        <h4>Eple</h4>
                        <p>Lorem ipsum</p>
                      </div>
                    </a>
                    <div class="box-bottom">
                      <div class="price-wrapper">
                        <span class="text-align-right">10,-</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-3 item-container">
                <div class="item">
                  <a class="image-container" href="#">
                    <div class="image-wrapper">
                      <img class="image" src="images/product_placeholder.jpg" alt="product" />
                    </div>
                  </a>
                  <div class="content-block">
                    <a class="text-container" href="#">
                      <div class="text-content">
                        <h4>Eple</h4>
                        <p>Lorem ipsum</p>
                      </div>
                    </a>
                    <div class="box-bottom">
                      <div class="price-wrapper">
                        <span class="text-align-right">10,-</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

        <!-- End of first row -->
        <div class="container-fluid text-center mt-4">
          <a href="productlist.php?type=Candy" class="title-container">
            <h2>Candy</h2>
          </a>
        </div>
        <!-- Second row -->
        <div class="container-fluid">
          <div class="col-12 items-wrapper">
            <div class="row">
              <!-- item -->
              <div class="col-3 item-container">
                <div class="item">
                  <a class="image-container" href="#">
                    <div class="image-wrapper">
                      <img class="image" src="images/product_placeholder.jpg" alt="product" />
                    </div>
                  </a>
                  <div class="content-block">
                    <a class="text-container" href="#">
                      <div class="text-content">
                        <h4>Eple</h4>
                        <p>Lorem ipsum</p>
                      </div>
                    </a>
                    <div class="box-bottom">
                      <div class="price-wrapper">
                        <span class="text-align-right">10,-</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- item -->
              <div class="col-3 item-container">
                <div class="item">
                  <a class="image-container" href="#">
                    <div class="image-wrapper">
                      <img class="image" src="images/product_placeholder.jpg" alt="product" />
                    </div>
                  </a>
                  <div class="content-block">
                    <a class="text-container" href="#">
                      <div class="text-content">
                        <h4>Eple</h4>
                        <p>Lorem ipsum</p>
                      </div>
                    </a>
                    <div class="box-bottom">
                      <div class="price-wrapper">
                        <span class="text-align-right">10,-</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-3 item-container">
                <div class="item">
                  <a class="image-container" href="#">
                    <div class="image-wrapper">
                      <img class="image" src="images/product_placeholder.jpg" alt="product" />
                    </div>
                  </a>
                  <div class="content-block">
                    <a class="text-container" href="#">
                      <div class="text-content">
                        <h4>Eple</h4>
                        <p>Lorem ipsum</p>
                      </div>
                    </a>
                    <div class="box-bottom">
                      <div class="price-wrapper">
                        <span class="text-align-right">10,-</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-3 item-container">
                <div class="item">
                  <a class="image-container" href="#">
                    <div class="image-wrapper">
                      <img class="image" src="images/product_placeholder.jpg" alt="product" />
                    </div>
                  </a>
                  <div class="content-block">
                    <a class="text-container" href="#">
                      <div class="text-content">
                        <h4>Eple</h4>
                        <p>Lorem ipsum</p>
                      </div>
                    </a>
                    <div class="box-bottom">
                      <div class="price-wrapper">
                        <span class="text-align-right">10,-</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of second row -->
        <div class="container-fluid text-center mt-4">
          <a href="productlist.php?type=Vegetables" class="title-container">
            <h2>Vegetables</h2>
          </a>
        </div>
        <!-- Third row -->
        <div class="container-fluid">
          <div class="col-12 items-wrapper">
            <div class="row">
              <!-- item -->
              <div class="col-3 item-container">
                <div class="item">
                  <a class="image-container" href="#">
                    <div class="image-wrapper">
                      <img class="image" src="images/product_placeholder.jpg" alt="product" />
                    </div>
                  </a>
                  <div class="content-block">
                    <a class="text-container" href="#">
                      <div class="text-content">
                        <h4>Eple</h4>
                        <p>Lorem ipsum</p>
                      </div>
                    </a>
                    <div class="box-bottom">
                      <div class="price-wrapper">
                        <span class="text-align-right">10,-</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- item -->
              <div class="col-3 item-container">
                <div class="item">
                  <a class="image-container" href="#">
                    <div class="image-wrapper">
                      <img class="image" src="images/product_placeholder.jpg" alt="product" />
                    </div>
                  </a>
                  <div class="content-block">
                    <a class="text-container" href="#">
                      <div class="text-content">
                        <h4>Eple</h4>
                        <p>Lorem ipsum</p>
                      </div>
                    </a>
                    <div class="box-bottom">
                      <div class="price-wrapper">
                        <span class="text-align-right">10,-</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-3 item-container">
                <div class="item">
                  <a class="image-container" href="#">
                    <div class="image-wrapper">
                      <img class="image" src="images/product_placeholder.jpg" alt="product" />
                    </div>
                  </a>
                  <div class="content-block">
                    <a class="text-container" href="#">
                      <div class="text-content">
                        <h4>Eple</h4>
                        <p>Lorem ipsum</p>
                      </div>
                    </a>
                    <div class="box-bottom">
                      <div class="price-wrapper">
                        <span class="text-align-right">10,-</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-3 item-container">
                <div class="item">
                  <a class="image-container" href="#">
                    <div class="image-wrapper">
                      <img class="image" src="images/product_placeholder.jpg" alt="product" />
                    </div>
                  </a>
                  <div class="content-block">
                    <a class="text-container" href="#">
                      <div class="text-content">
                        <h4>Eple</h4>
                        <p>Lorem ipsum</p>
                      </div>
                    </a>
                    <div class="box-bottom">
                      <div class="price-wrapper">
                        <span class="text-align-right">10,-</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of third row -->


        <div class="container-fluid text-center mt-4">
          <a href="productlist.php?type=Milk" class="title-container">
            <h2>Milk</h2>
          </a>
        </div>
        <!-- Fourth row -->

        <div class="container-fluid">

          <div class="col-12 items-wrapper">
            <div class="row">
              <!-- item -->
              <?php
              $products=array();
              $sql="SELECT * FROM items WHERE type='candy'";
              $result = mysqli_query($link, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
                  array_push($products, $row);
              }
              for ($i=0; $i < 4 ; $i++) {
                  echo
                  '
              <div class="col-3 item-container">
                <div class="item">
                  <a class="image-container" href="#">
                    <div class="image-wrapper">
                      <img class="image" src="images/'.$products[$i]['picture_name'].'" />
                    </div>
                  </a>
                  <div class="content-block">
                    <a class="text-container" href="#">
                      <div class="text-content">
                        <h4>'.$products[$i]['itemname'].'</h4>
                        <p>'.$products[$i]['description'].'</p>
                      </div>
                    </a>
                    <div class="box-bottom">
                      <div class="price-wrapper">
                        <span class="text-align-right">'.$products[$i]['out_price'].'</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              ';
            }
              ?>
            </div>
          </div>

        </div>

        <!-- End of fourth row -->
    </main>
    <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/carousel.js"></script>
    <?php include 'templates/footer.php'; ?>
  </body>
</html>
