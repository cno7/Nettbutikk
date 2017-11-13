<?php
//Defining login details for database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'webshop_db');

//Connecting to database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

?>



<!--include 'db_connecter.php' denne må addes til toppen av sider som skal bruke db-->
