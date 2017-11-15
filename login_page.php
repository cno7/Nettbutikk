<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <h3>Enter email and password</h3>
    <form action="scripts/login.php" method="post">
       <input type="text" name="mail" placeholder="email">
       <br />
       <input type="password" name="password">
       <br />
       <button type="submit">Login</button>
     </form>
     <p><?php
     if (isset($_SESSION['error'])) {
       echo $_SESSION['error'];
     }
     else{
       echo "";
     }
      ?></p>
  </body>
</html>
