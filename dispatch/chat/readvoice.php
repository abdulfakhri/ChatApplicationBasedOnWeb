<?php
include('../c/c.php');
include('../c/nav/chatstyle.php');
include($dbc);

include "$rootDir/dispatch/c/connnection.php";


$se=$_SESSION['id'];


 
$token=$_GET['dp'];
$se=$_GET['di'];




    
     $fetch = mysqli_query($conn, "SELECT * FROM chat_message WHERE taxi_comp='$se' ORDER BY date_reg DESC");
    
     while($row = mysqli_fetch_assoc($fetch)){
       $to=$row['token'];     
       $token=$_GET['dp'];
       $sender=$row['sender'];
       $taxiC= $row['taxi_comp'];
       $reciever=$row['reciever'];
       $sender=$row['sender'];
       $apiKey=$_SESSION['id'];
      
       $voice= $row['filepath'];
       
        $l = $row['filepath'];
       $f= $row['chat_message'];
                     if($f != null){
                       echo'<table><tr>';
                       echo '<td>'.'<b>'.$tname.'</b>'.':<br>'.$f.'</td>';
                       echo '</tr></table>';
                     }else if($l != null){
                       foreach(glob($l) AS $voicemessages){
                       echo '<audio id="player" src="'.$voicemessages.'"width="320px" height="200px"  >';
                       echo 'Your browser does not support the audio element.';
                       echo '</audio><br>';
                       echo $voicemessages;
                       ?>
                       
                       <button onclick="document.getElementById('player').play()">Play</button> 
                       
                       <?php
                       echo '</table>';
                       }
                     }
      
     }
     ?>
