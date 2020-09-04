<?php
session_start();
include('../c/connection.php');
if(!isset($_SESSION['id'])){
header("location:login.php");
}
?>

        
        <link rel="stylesheet" href="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://cdn.rawgit.com/mervick/emojionearea/master/dist/emojionearea.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
  		
  	   <?php include ('../c/nav/chatstyle.php');?>
    </head>  


    <body>  
  
       
          
          
          <br>
            <div class="title" id="user_details"></div>
       
       
      
	 
<br>
              
 
<script>  
$(document).ready(function(){

	fetch_user();

	setInterval(function(){
		
		fetch_user();
		
	}, 10000);
	
function getUrlVars() {
        
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
    }
    var sender = getUrlVars()["di"];
    var reciever  = getUrlVars()["uid"];
    var token= getUrlVars()["dp"];
    
    
	function fetch_user(){
		$.ajax({
			url:"readv.php?token="+token+"&sender="+sender+"&reciever="+reciever,
			method:"POST",
			success:function(data){
				$('#user_details').html(data);
			}
		})
	}
	
	
	
	
});  
</script>
<?php include($ft);?>