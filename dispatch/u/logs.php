<?php 
include('../c/c.php');
include ($navu);
?>
<script>
    function pageRedirectDispatch() {
     // window.location.href = "/dispatch/u/signin_dsp.php";
       //location.replace = "/dispatch/u/signin_dsp.php";
       location.replace("/dispatch/u/signin_ow2.php");
    }
    function pageRedirectAdmin() {
     // window.location.href = "/dispatch/u/signin_ow.php";
     //location.replace = "/dispatch/u/signin_ow.php";
     location.replace("/dispatch/u/signin_ow.php");
    }
</script> 

<center>
     <img  src="aid.png" alt="" width="" height="">
             </center>
<br><br>
<body bgcolor="">
    <div class="container">

    
    
      <div class="w3-row-padding" style="margin:0 -16px;">
        <div class="w3-half w3-margin-bottom">
          <ul class="w3-ul  w3-center w3-opacity w3-hover-opacity-on">
            <li class="w3-green w3-xlarge w3-padding-32">Dispatcher</li>
           
            <li class="w3-padding-24">
              <button class="w3-button w3-white w3-padding-large" onclick="pageRedirectDispatch()" >Sign In</a></button>
            </li>
          </ul>
        </div>
        
        <div class="w3-half">
          <ul class="w3-ul w3-center w3-opacity w3-hover-opacity-on">
            <li class="w3-green w3-xlarge w3-padding-32">Administrator</li>
            
            <li class="w3-padding-24">
              <button class="w3-button w3-white w3-padding-large" onclick="pageRedirectAdmin()" >Sign In</a></button>
            </li>
          </ul>
        </div>
      </div>
    


<!-- End page content -->
</div>
</body>             


