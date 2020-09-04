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

body {
  font-family: Arial;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 0px;
}

.left {
  left: 0;
  background-color: #111;
  height: 100%;
  width: 30%;
  position: fixed;
  z-index: 1;
   top: 10%;
  overflow-x: hidden;
  padding-top: 0px;
}

.right {
  right: 0;
  background-color: red;
  height: 100%;
  width: 70%;
  position: fixed;
  z-index: 1;
  top: 10%;
  overflow-x: hidden;
  padding-top: 0px;
}



     /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #000;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.lighter {
  border-color: #e6e6ff;
  background-color: #ccffcc;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
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


  
  

