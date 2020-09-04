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
		
/////////////////////////////////////////////////////////////////////    
$to=$_POST['to'];

$apiKey=$_POST['key'];

$from= $_POST['key'];

$tm=$_POST['message'];

$pickup=$_POST['src_addr'];

$drop=$_POST['dest_addr'];

$token=$_POST['token'];


///////////////////////////////////////////////////////////////
$sql="INSERT INTO chat_message(token,reciever,sender,chat_message,pickup,dropoff,taxi_comp) VALUES('$token','$to','$from','$tm','$pickup','$drop','$apiKey')";

$result=mysqli_query($conn,$sql);

if($result!=null){
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  echo "Inserted";
}else{
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	echo "Not Upload";
}
mysqli_close($conn);
	

?>