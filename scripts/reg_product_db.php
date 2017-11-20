<?php
    require_once 'db_connecter.php';
// User NEED to be loged in to be able to add items. TODO code this!
    $item_code = $_POST['item_code'];
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    $amountsold = $_POST['amount_sold'];
    $producer = $_POST['producer'];
    $type = $_POST['type'];
    $in_price = $_POST['in_price'];
    $out_price = $_POST['out_price'];
    $gross_profit = $_POST['gross_profit'];
    $profit = $_POST['profit'];
    $picture_name = $_POST['picture_name'];

    $sql_check = "SELECT * FROM items WHERE itemname='$item_name'";
    $result_check = mysqli_query($link, $sql_check);
    if(mysqli_fetch_assoc($result_check)){
        echo "Item already in database";
        header("Location: ../registeritems.php");
    }
    else{
        $sql = "INSERT INTO `items` (`itemcode`, `itemname`, `quantity`, `description`, `numbers_sold`, `producer`, `type`, `in_price`, `out_price`, `gross_profit`, `profit`, `picture_name`) VALUES
        ('$item_code', '$item_name', '$quantity', '$description', '$amountsold', '$producer', '$type', '$in_price', '$out_price', '$gross_profit', '$profit', '$picture_name')";
        $result = mysqli_query($link, $sql);
        header("Location: ../registeritems.php");
    }
 ?>
