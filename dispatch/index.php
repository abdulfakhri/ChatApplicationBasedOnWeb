<?php header('Location: https://cloud.aidispatchsys.com/dispatch/u/logs.php');?>
<!DOCTYPE html>
<html>
<title>AiDispatchSys</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Raleway", Arial, sans-serif}
h1 {letter-spacing: 10px}
.w3-row-padding img {margin-bottom: 18px}
</style>
<script>
 function driverApp() {
      window.location.href = "/vehicle/u/signin_d.php";
    }
 function dispatchCloud() {
      window.location.href = "/dispatch/u/logs.php";
    }  
 function customerApp() {
      window.location.href = "/customer/u/signin.php";
    } 
</script>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

<!-- Header -->
<header class="w3-panel w3-center w3-opacity" style="padding:128px 16px">
  <h1 class="w3-xlarge w3-light-black"><b>AI Dispatch Sys Technology</b></h1>
  <h4>Select Your Service</h4>
  
  <div class="w3-padding-32">
    <div class="w3-bar w3-border">
       <span onclick="driverApp()" class="w3-bar-item w3-button" style='font-size:24px;'><b>Driver App</b></span>
      
      <span onclick="dispatchCloud()" class="w3-bar-item w3-button" style='font-size:24px;'><b>Dispatch System</b></span>

       <span onclick="customerApp()" class="w3-bar-item w3-button" style='font-size:24px;'><b>Booking App</b></span>
       <span></span>
    </div>
  </div>
</header>

<!-- End Page Content -->
</div>


</body>
</html>
