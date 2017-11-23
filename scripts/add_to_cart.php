<?php
    session_start();
    require_once 'db_connecter.php';
    $item_id = $_POST['productId'];
    $amount = $_POST['inpBuyAmount'];

    $sql = "SELECT * FROM items WHERE itemcode='$item_id'";

    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);

    $_SESSION['cart'] = array( array($item_id), array($amount));

    header("Location: ../productpage.php?product=" . $row['itemname']);

?>
