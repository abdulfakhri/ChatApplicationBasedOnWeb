

<style>
 
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0;
  padding-top: 60px;
  text-align:center;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0;

}

.sidenav a:hover{
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<div id="CityCamera" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeCamera()">&times;</a>
  
 <center>
<iframe style="border: none; overflow: hidden;" scrolling="no" src="https://511ny.org/Map/EmbeddedMap?&amp;region=NYC&amp;layers=&ampwidth:100%; height:90%;size=0" width="100%" height="100%" frameborder="0"></iframe>

<!--<iframe style="border: none; overflow: hidden;" scrolling="no" src="https://511ny.org" width="100%" height="100%" frameborder="0"></iframe>-->

</center>

  
     
</div>   
<script>
function openCamera() {
  document.getElementById("CityCamera").style.width = "100%";
}

function closeCamera() {
  document.getElementById("CityCamera").style.width = "0";
}
</script>

       
        
</body>

