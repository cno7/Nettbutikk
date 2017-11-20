<?php
    require_once 'scripts/db_connecter.php';

    $product = $_GET['product'];

    $sql = "SELECT * FROM items WHERE itemname='$product'";

    $result = mysqli_query($link, $sql);
    if(!$row = mysqli_fetch_assoc($result)){
      $_SESSION['error']= "Product not found";
      header("Location: ../produktside.php");
    }
    else{
        echo "<p>In stock: <span id=\"productStock\">" . $row['quantity'] . "</span> stk.</p>";
        echo "<span id=\"addedToCart\">&nbsp;</span>";
        echo "</div></div>";
        echo "<div class=\"row tab\"><!-- Middle: Div for the more detailed description and more -->";
        echo "<button class=\"tablinks\" onclick=\"openTab(event, 'productDetails')\" id=\"defaultOpen\">Product Info</button>";
        echo "<button class=\"tablinks\" onclick=\"openTab(event, 'productQuestions')\" id=\"questionsTab\">Specifications</button>";
        echo "</div>";
        echo "<div class=\"col tabcontent\" id=\"productDetails\">";
        echo "<h4>" . $row['itemname'] . "</h4>";
        echo "<p>" . $row['description'] . "</p>";
        echo "</div>";
        echo "<div class=\"col tabcontent\" id=\"productQuestions\">";
        echo "<h4>Specifications:</h4>";
        echo "<p>" . $row['type'] . "</p>";
        echo "</div>";
    }
 ?>
