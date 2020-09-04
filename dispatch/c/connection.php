<?php
$databaseHost = 'localhost';
$databaseName = 'ironxpxj_trip';
$databaseUsername = 'ironxpxj_admin';
$databasePassword = '!@#123qweasdzxc';
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
///////////////////////////////////PDO////////////////////////////////////////////////////
$username = 'ironxpxj_admin';
$password = '!@#123qweasdzxc';
$connPDO = new PDO( 'mysql:host=localhost;dbname=ironxpxj_trip', $username, $password ); 
	
?>