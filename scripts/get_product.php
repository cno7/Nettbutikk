<?php
    require_once 'scripts/db_connecter.php';

    $product = $_GET['product'];

    $sql = "SELECT * FROM items WHERE itemname='$product'";

    $result = mysqli_query($link, $sql);
    if(!$row = mysqli_fetch_assoc($result)){
      echo "<h1>ERROR: Product not found!</h1>";
    }
    else{
        echo "<img alt=\"Responsive image\" class=\"img-responsive center-block imgProduct\" src=\"images/" . $row['picture_name'] . "\" />";
        echo "</div>";
        echo "<div class=\"col-6 col-sm-6\">";
        echo "<h3 id=\"lblProductName\">" . $row['itemname'] . "</h3>";
        echo "</br>";
        echo "<ul>";
        echo "<li>";
        echo "Producer: <span id=\"productOrigin\">" . $row['producer'] . "</span>";
        echo "</li>";
        echo "<li>";
        echo "Some more info here";
        echo "</li>";
        echo "<li>";
        echo "Like how they can be red, green, yellow and so on.";
        echo "</li>";
        echo "<li>";
        echo "They grow on trees!";
        echo "</li>";
        echo "</ul>";
        echo "</div>";
        echo "<div class=\"col-2 col-sm-2 priceField\">";
        echo "<h5>Price:</h5>";
        echo "kr <span id=\"productPrice\">" . $row['out_price'] . "</span> ,-";
        echo "</br>";
        echo "</br>";
        echo "<form class=\"\" action=\"scripts/add_to_cart.php\" method=\"post\" onsubmit=\"return addToCart()\">";
        echo "<input type=\"hidden\" name=\"productId\" value=" . $row['itemcode'] . " />";
        echo "<p class=\"fadedGrey\">Item id: <label for=\"btnBuy\">" . $row['itemcode'] . "</label></p>";
    }

 ?>
