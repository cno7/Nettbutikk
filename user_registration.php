<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>
    <h3>Register account</h3>
    <form action="scripts/reg_to_db.php" method="post">
       <input type="text" name="fname" placeholder="Firstname">
       <br />
       <input type="text" name="lname" placeholder="Lastname">
       <br />
       <input type="text" name="address" placeholder="Adress">
       <br />
       <input type="text" name="zipcode" placeholder="Zipcode">
       <br />
       <input type="text" name="city" placeholder="City">
       <br />
       <input type="text" name="phone" placeholder="Phone number">
       <br />
       <input type="text" name="email" placeholder="Email">
       <br />
       <input type="password" name="pwd" placeholder="Password">
       <br />
       <button type="submit">Register</button>
     </form>
  </body>
</html>
