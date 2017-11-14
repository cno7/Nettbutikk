

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <h3>Enter email and password</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
       <input type="text" name="mail" placeholder="email">
       <br />
       <input type="password" name="password">
       <br />
       <button type="submit">Login</button>
     </form>

  </body>
</html>
