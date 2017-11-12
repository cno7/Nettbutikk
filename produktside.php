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
                <div class="col col-4 red"><!-- Image div -->
                    <div class="col">
                        <img alt="Product" class="imgProduct" src="placeholder.jpg" />
                    </div>
                </div>
                <div class="col col-8 blue"><!-- Short-info-text div -->
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
                    <input type="number" class="inpBuyAmount" id="inpBuyAmount" min="1" value="1" />
                    <button type="button" class="btnBuy" name="btnBuy" id="btnBuy">Add to cart</button>
                </div>
            </div>
            <div class="row tab green"><!-- Middle: Div for the more detailed description and more -->
              <button class="tablinks" onclick="openTab(event, 'productDetails')" id="defaultOpen">Details</button>
              <button class="tablinks" onclick="openTab(event, 'productQuestions')" id="questionsTab">Questions & Answers</button>
              <button class="tablinks" onclick="openTab(event, 'productReview')" id="reviewTab">Customer Review</button>
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
            <div class="col tabcontent" id="productReview">
              <h4>Customer reviews</h4>
              <p>Best apples ever!<i> - Happy customer</i></p>
            </div>
            <div class="row yellow"><!-- Bottom: Div for similar products etc.  -->
              <div class="col">
                <h4>Similar products</h4>
                <p>Some boxes with simliar products here.</p>
              </div>
            </div>
        </div>
        <script src="script.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <?php include 'templates/footer.php'; ?>
    </body>
</html>
