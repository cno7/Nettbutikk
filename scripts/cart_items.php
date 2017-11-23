<?php
if (session_status() == PHP_SESSION_NONE) {
    @session_start();
}
$item_id = $_SESSION['cart'][0][0];
require_once 'db_connecter.php';
$sql = "SELECT * FROM items WHERE itemcode='$item_id'";

$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

echo "<div class=\"row\">";
echo "<div class=\"col-7 col-sm-7\">";
echo "<span><b>Item</b></span>";
echo "<ul class=\"ulNoShow\" id=\"cartItem\">";
foreach($_SESSION['cart'][0] as $itemname)
{
    echo "<li>" . $row['itemname'] . "</li>";
}
echo "</ul>";
echo "</div>";
echo "<div class=\"col-2 col-sm-2\">";
echo "<span><b>Item id</b></span>";
echo "<ul class=\"ulNoShow\" id=\"cartItemId\">";
foreach($_SESSION['cart'][0] as $itemid)
{
    echo "<li>" . $itemid . "</li>";
}
echo "</ul>";
echo "</div>";
echo "<div class=\"col-1 col-sm-1\">";
echo "<span><b>Amount</b></span>";
echo "<ul class=\"ulNoShow\" id=\"cartAmount\">";
foreach($_SESSION['cart'][1] as $amount)
{
    echo "<li>" . $amount . "</li>";
}
echo "</ul>";
echo "</div>";
echo "<div class=\"col-1 col-sm-1\">";
echo "<span><b>Price</b></span>";
echo "<ul class=\"ulNoShow\" id=\"cartPrice\">";
foreach($_SESSION['cart'][0] as $itemprice)
{
    echo "<li>" . $row['out_price'] . "</li>";
}
echo "</ul>";
echo "</div>";
echo "<div class=\"col-1 col-sm-1\">";
echo "<span><b>Total</b></span>";
echo "<ul class=\"ulNoShow\" id=\"cartTotal\">";
echo "<li>" . $amount * $row['out_price'] . "</li>";
echo "</ul>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "<hr>";
echo "<div class=\"row\">";
echo "<div class=\"col-10 col-sm-10\">";
echo "</div>";
echo "<div class=\"col-2 col-sm-2 cart-buy-total\">";
echo "<span><b>Order total: </b></span><span><b>" . $amount * $row['out_price'] . "</b></span><span><b>,-</b></span>";
echo "</br>";
echo "</br>";
echo "<button type=\"button\" onclick=\"buyCart();\" class=\"btnCartBuy\" name=\"button\">BUY</button>";
echo "</div>";
echo "</div>";

?>
