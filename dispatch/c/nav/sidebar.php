<!DOCTYPE html>
<html lang="en">
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-quarter img{margin-bottom: -6px; cursor: pointer}
.w3-quarter img:hover{opacity: 0.6; transition: 0.3s}
header{
    height:10%;
}
</style>

<body class="w3-<?PHP echo $colormode;?>">

<div class="container-dashboard">
  <header class="w3-top w3-<?PHP echo $colormode;?> w3-xlarge w3-padding-12"  style=" border-radius: 1px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2); border:1px #fff solid;">
  <span class="w3-<?PHP echo $top_contents_align;?> w3-padding" style="font-size:18px;cursor:pointer;" onClick="home()" ><?PHP echo $_SESSION['name'];?><br>
  <h12>&nbsp;&nbsp;&nbsp;powered by aiDispatchSys</h12>
  </span>
 
  <span class="w3-right w3-padding" style="font-size:17px;cursor:pointer" onclick="refresh()" >Refresh</span>
  <span class="w3-right w3-padding" style="font-size:17px;cursor:pointer" onclick="menu()" >Menu</span>
  
<div class="col-lg-12" style="width:100%; border-radius: 0px; border: 0px solid #ccc">
   
  </div> 
  <br>
</header>


  
  

