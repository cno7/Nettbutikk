
<?php
  requierd_once('db_connecter.php');
  session_start();
  session_destroy();
  header('Location: ../index.php');
 ?>
