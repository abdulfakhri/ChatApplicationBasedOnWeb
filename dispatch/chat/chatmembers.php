<?php
session_start();
include('../c/api.php');
include('../c/c.php');
include('../c/connection.php');

?>                
<center>
<div class="table-responsive-clg text-nowrap">
                                <table class="table">
                                <tr bgcolor="#ff3333">
                                  <th style='color:#fff'>Drivers#</th>
                                  <th style='color:#fff'>VType</th>
                                   
                                  <th style='color:#fff'>Text</th>
                                  <th style='color:#fff'>Talk</th>
                                  <th style='color:#fff'>Call</th>
                                  
                                  <th style='color:#fff'>SMS</th>
                                </tr>
		                        <tbody> 
                               <?php
                               
                                $apiKey=$_SESSION['id'];
                                 //$apiKey=;
                               //fetching data in descending order (lastest entry first)
                               $resul = mysqli_query($conn,"SELECT * FROM taxi_drivers WHERE taxi_comp='$apiKey' AND active='active'");
		                       while($res2 = mysqli_fetch_array($resul)) {
		                           $did=$res2['driverId'];
		                           $dsp=$_SESSION['id'];
		                           $_SESSION['selectedD']=$_SESSION['driverId'];
		                            $s=$res2['status'];
		                           if($s==0){
		                               $ms="Offline";
		                           }else  if($s==1){
		                               $ms="Online";
		                           }else if($s==null){
		                              $ms="Offline";
		                           }
		                           $token=(rand(10,1000));
		                            echo "<tr>";
		                            echo "<td style='color:#fff'>".$res2['driverId']."</td>";
		                            echo "<td style='color:#fff'>".$res2['type']."</td>";
		                           
		                            ?>
		
		
		                          <td style='color:#fff'><button class="btn" onclick="window.location='/dispatch/chat/chatform.php?lt=<?php echo $res2['lat'];?>&lg=<?php echo $res2['lng'];?>&uid=<?php echo $res2[driverId];?>&di=<?php echo $dsp;?>&dp=<?php echo $res2[driverId]+$dsp;?>';">Text</button></td>
		                          <td style='color:#fff'><button class="btn" onclick="window.location='/dispatch/chat/chatform.php?lt=<?php echo $res2['lat'];?>&lg=<?php echo $res2['lng'];?>&uid=<?php echo $res2[driverId];?>&di=<?php echo $dsp;?>&dp=<?php echo $res2[driverId]+$dsp;?>';">Talk</button></td>
		                           <td><a href="tel:<?php echo $res2['driver_phone'];?>"><button>Call</button></a></td>
		                           
		                            <td><a href="sms:<?php echo $res2['driver_phone'];?>"><button>SMS</button></a></td>
		                           <?php
		                            echo "</tr>";
	                            	}
	                            	?> 
	                            	
                                     </tbody>
                                </table> 
                            </div>
                              
</center>
<form action="" method="POST">
	                            	   
	                            	    
	                            	</form>