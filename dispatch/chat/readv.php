<?php
session_start();
include('../c/api.php');
include('../c/c.php');
include('../c/connection.php');

?>                

<div class="table-responsive-clg text-nowrap">
                                <table class="table">
                              
                                
		                        <tbody> 
                               <?php
                               $token=$_GET['token'];
                                $apiKey=$_SESSION['id'];
                                $sender=$_GET['sender'];
                                $reciever=$_GET['reciever'];
                                 //$apiKey=;
                               //fetching data in descending order (lastest entry first)
                               $resul = mysqli_query($conn,"SELECT * FROM chat_message WHERE taxi_comp='$apiKey' ORDER BY date_reg DESC");
		                       while($res2 = mysqli_fetch_array($resul)) {
		                         
		                          $voice=$res2['filepath'];
		                          
		                          if($voice !=null){
		                            
		                            $c="controls";  
		                              
		                          }else{
		                               $c=" ";
		                          }
		                           
		                         $senderM=$res2['sender'];
		                         $reciever=$_GET['reciever'];
		                         $recieverM=$res2['reciever'];
		                         $message=$res2['chat_message'];
		                         $src_addr=$res2['pickup'];
		                         $dest_addr=$res2['dropoff'];
		                         $voiceM=$res2['filepath'];
		                         
		                         $pickup = $res2['pickup'];
		                         $dropoff=$res2['dropoff'];
		                         
		                        if($pickup !=null and $dropoff != null){
		                              //Change address format
                                    $formattedAddrFrom = str_replace(' ','+',$pickup);
                                     $formattedAddrTo = str_replace(' ','+',$dropoff);
                                     
                                     $ja="Job Address";
                                  
                                 
                                 
		                         }else{
		                           
		                           $ja=" ";
		                             
		                         }
		                         
		                         if($reciever===$recieverM){
		                         ?>
		                            <tr style='color:#fff'>
		                              
		                           
		                                   <?php echo $res2['chat_message'];?>
		                            </tr><br>
		                      
		                              <a href="https://www.google.com/maps/dir/?api=1&origin=<?PHP echo $formattedAddrFrom;?>
		                          &destination='<?PHP echo $formattedAddrTo;?>'&dir_action=navigate"><?php echo $ja;  ?></a>
		                       
		                            </tr>
		                             <tr>
		                                    <audio <?php echo $c;?> src="<?php echo $res2['filepath'];?>"></audio>
		                                  


		                                 
		                          </tr><br>
		                    
		                     <?php
		                      }else if($recieverM=='all'){
		                      ?> 
		                       
		                       <tr style='color:#fff'>
		                              
		                           
		                                   <?php echo $res2['chat_message'];?>
		                            </tr><br>
		                            <tr style='color:#fff'>
		                                   <?php echo $res2['pickup'];?>
		                                   <?php echo $res2['dropoff'];?>
		                            </tr><br>
		                             <tr>
		                                    <audio <?php echo $c;?> src="<?php echo $res2['filepath'];?>"></audio>
		                                
		                                 
		                          </tr><br>  
		    
		                  <?php    
		                      }
		                              
	                        }
	                       ?> 
	                            	
         </tbody>
                                     
                                     
    </table> 
                            
</div>
                              

