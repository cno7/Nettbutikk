<?php
require_once 'db_connecter.php';

$itemcode=$_POST['itemcode'];

$sql = "DELETE FROM items WHERE itemcode='$itemcode'";

$result=mysqli_query($link, $sql);

header("Location: ../admin.php");
 ?>
