<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <!-- Custom ccs and javascript. NOT a part of bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="css/master.css">
    <title>Nettbutikk</title>
  </head>
  <body>
    <?php include 'templates/navbar.php'; ?>
        <div class="container"><!-- Main div to encapsule the others -->
            <div class="row"><!-- Top: Div to encapsule the image div and short-info-text div -->
                <div class="col-4 col-sm-4"><!-- Image div -->
                    <img alt="Responsive image" class="img-responsive center-block imgProduct" src="images/product_placeholder.jpg" />
                </div>
                <div class="col-6 col-sm-6"><!-- Short-info-text div -->
                    <h3 id="lblProductName">Apple</h3>
                    <ul>
                        <li>
                            Land of origin: <span id="productOrigin">Norway</span>
                        </li>
                        <li>
                            Some more info here
                        </li>
                        <li>
                            Like how they can be red, green, yellow and so on.
                        </li>
                        <li>
                            They grow on trees!
                        </li>
                    </ul>
                  </div>
                <div class="col-2 col-sm-2 priceField">
                    <h5>Price:</h5>
                    <span id="productPrice">100</span> kr,-
                    </br>
                    </br>
                    <button type="button" onclick="decreaseBuyAmount();" class="upDown" name="btnDecrease" id="btnDecrease"><b>-</b></button>
                    <input type="number" class="inpBuyAmount" id="inpBuyAmount" min="1" value="1" />
                    <button type="button" onclick="increaseBuyAmount();" class="upDown" name="btnIncrease" id="btnIncrease"><b>+</b></button>
                    </br>
                    </br>
                    <button type="button" onclick="addToCart();" class="btnBuy" name="btnBuy" id="btnBuy">Add to cart</button>
                    </br>
                    </br>
                    <p>In stock: <span id="productStock">10</span> stk.</p>
                    <span id="addedToCart">&nbsp;</span>
                </div>
            </div>
            <div class="row tab"><!-- Middle: Div for the more detailed description and more -->
              <button class="tablinks" onclick="openTab(event, 'productDetails')" id="defaultOpen">Product Info</button>
              <button class="tablinks" onclick="openTab(event, 'productQuestions')" id="questionsTab">Specifications</button>
            </div>
            <div class="col tabcontent" id="productDetails">
              <h4>Apple</h4>
              <p >
                  The apple tree is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus.
              </p>
            </div>
            <div class="col tabcontent" id="productQuestions">
              <h4>Question:</h4>
              <p>What is an apple?</p>
              <h5>Answer:</h5>
              <p>An apple is a fruit.</p>
            </div>
        </div>
        <script src="scripts/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <?php include 'templates/footer.php'; ?>
    </body>
</html>
