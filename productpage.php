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
                    <?php include 'scripts/get_product.php'; ?><!-- php to load data about the product -->
                        <button type="button" onclick="decreaseBuyAmount();" class="upDown" name="btnDecrease" id="btnDecrease"><b>-</b></button>
                        <input type="number" class="inpBuyAmount" name="inpBuyAmount" id="inpBuyAmount" min="1" value="1" />
                        <button type="button" onclick="increaseBuyAmount();" class="upDown" name="btnIncrease" id="btnIncrease"><b>+</b></button>
                        </br>
                        </br>
                        <button type="submit" class="btnBuy" onclick="addToCart();" name="btnBuy" id="btnBuy">Add to cart</button>
                    </form>
                    </br>
                    </br>
            <?php include 'scripts/get_product_details.php'; ?>
        </div>
        <script src="scripts/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <?php include 'templates/footer.php'; ?>
    </body>
</html>
