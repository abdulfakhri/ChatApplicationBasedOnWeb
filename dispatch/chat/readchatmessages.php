
<html>
 <head>
<style>
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

</head> 
<body>
<?php
session_start();
include('../c/api.php');
include('../c/c.php');
include('../c/nav/chatstyle.php');
include($dbc);
include('../c/layout/chatstyle.php');
include "$rootDir/dispatch/c/connnection.php";

?>

<div class="table-responsive-clg text-nowrap">
<table class="table">
<tbody> 
<?php
$apiKey=$_SESSION['id'];
$token=$_GET['q'];
$se=$_GET['se'];

$fetch = mysqli_query($conn, "SELECT * FROM chat_message WHERE taxi_comp='$se' ORDER BY date_reg DESC");
     
     while($row = mysqli_fetch_array($fetch)){
         
       $to=$row['token'];     
       $token=$_GET['q'];
       $sender=$row['sender'];
       $taxiC= $row['taxi_comp'];
       $reciever=$row['reciever'];
       $sender=$row['sender'];
       $apiKey=$_SESSION['id'];
       
       if($sender==$apiKey){
           $person="Dispatcher";
           $position="right";
           $timeposition="time-right";
           $bg="";
           
       }else {
           $person="Driver#".$sender;
           $position="left";
           $timeposition="time-right";
           $bg="darker";
       }
       
       $f= $row['chat_message'];
       $voice= $row['filepath'];
       $t=$row['date_reg'];
       if($voice == null){
         $v= null;
         $v2=null;
       }else{
         ?>
         
         
        }

  <?php      
    if($to==$token){
           
     
       

  ?>
                       <div class="container <?php $bg;?>">
                       <p class="<?php //echo $position;?>" style="width:5%;" style="color:"><?php echo $person;?>:</p>
                       <p><?php echo $f;?></p>
                        
                       <p><audio controls src="<?php echo $row['filepath'];?>"></p>
              
                       <span class="<?php echo $timeposition;?>"><?php echo $t;?></span>
                       
                       </div>
    
   <?php
     }
       }
     }
     ?>
     
     </tbody>        
 </table> 
</div>
                              

</body>
</html>
          
   