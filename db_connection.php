<?php
define('DB_SERVER' , "localhost");
define('DB_USERNAME' , "root");
define('DB_PASSWORD', 'Test12345!');
define('DB_NAME', 'test1'); 

$conn =  mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME) or die("not connected");

?>

