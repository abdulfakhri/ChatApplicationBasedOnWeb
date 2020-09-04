<?php 
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$rootDir/dispatch/c/api.php";
include "$rootDir/dispatch/c/c.php";
include "$rootDir/c/connnection.php";
include($nav);

include "$rootDir/dispatch/m/driverAPI/driverCreateAPI.php";



?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  
<style>


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  padding-top: 1%; /* Location of the box */
  left: 1%;
  top: 1%;
  right:1%;
  width: 90%; /* Full width */
  height: 95%; /* Full height */
  background-color: #000; /* Fallback color */
 
}

/* Modal Content */
.modal-content {
  background-color: black ;
  margin: auto;
  padding: 1%;
  border: 1px solid #888;
  width: 90%;
}

/* The Close Button */
.close {
  color: ;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: ;
  text-decoration: none;
  cursor: pointer;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
 
 </head>
 <body>
<?php
if(isset($_POST['actionUpdate'])){
    
$did=$_POST["driverId"];
$driver_name=$_POST["driver_name"];

$driver_report=$_POST["driver_report"];

$driver_phone=$_POST["driver_phone"];
$driver_email=$_POST["driver_email"];
$vehicle_number=$_POST["vehicle_number"];
$home_address=$_POST["home_address"];
$driving_license=$_POST["driving_license"];
$operator_license=$_POST["operator_license"];
$call_sign=$_POST["call_sign"];
$passenger =$_POST["passenger"];
$wheelchair =$_POST["wheelchair"];
$bags =$_POST["bags"];
$type =$_POST["type"];
$image= $_POST["image"];
$color =$_POST["color"];
$license_plate =$_POST["license_plate"];
$key=$_SESSION['id'];



if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
// Perform a query, check for error
if (!mysqli_query($conn,
"UPDATE taxi_drivers
SET
driver_name = '$driver_name',
driver_email = '$driver_email',
home_address = '$home_address',
driver_phone = '$driver_phone',
driving_license = '$driving_license',
operator_license= '$operator_license',
vehicle_number='$vehicle_number',
driver_id= '$call_sign',
passenger= '$passenger',
wheelchair= '$wheelchair',
pbag= '$bags',
type= '$type',
color= '$color',
report='$driver_report',
license_plate= '$license_plate'
WHERE driverId=$did 
AND taxi_comp=$key")
) {
  echo("Error description: " . mysqli_error($con));
}else{
    ?>
    <script>
        window.location.href="/dispatch/v/createDrivers.php";
    </script>
  

<?php
   
}

mysqli_close($con);
}
?>      
<?php
  $d=$_GET['d'];
  $api_key=$_SESSION['id'];
  //$sql="SELECT * FROM taxi_drivers WHERE taxi_comp='$api_key' AND driver_id='$d' ORDER BY driver_id DESC";
//fetching data in descending order (lastest entry first)
include('../c/connection.php');
$resul=mysqli_query($conn,"SELECT * FROM taxi_drivers WHERE taxi_comp='$api_key' AND driverId='$d' ORDER BY driver_id DESC");
while($res2 = mysqli_fetch_array($resul)) {
    //$res2['driver_level'];
		                                 $res2['driver_name'];
		                                 $res2['report'];
		                                 $res2['driver_phone'];
		                                 $res2['driver_id'];
		                                 $res2['driver_email'];
		                                 $res2['phone_line'];
		                                 $res2['home_address'];
		                                 $res2['driving_license'];
		                                 $res2['operator_license'];
		                                 $res2['driver_id'];
		                                 $res2['passenger'];
		                                 $res2['wheelchair'];
		                                 $res2['pbag'];
		                                 $res2['type'];
		                                 $res2['vehicle_number'];
		                                 $res2['color'];
		                                 $res2['license_plate'];
		                                 
?> 
 

<!--<div id="driverModal" class="modal">-->
  <center>
    <form action="" method="POST">
  <!--<div id="driverModal" class="modal-content">-->
        <div class="row">
            <div class="col-lg-6">
                <h3><label>Drivers Details</label></h3>
                 <input type="hidden" name="driverId" value="<?php echo $_GET['d'];?>">  
                 <input type="text-half"  placeholder="Driver Name" id="driver_name" name="driver_name"  value="<?php echo $res2['driver_name'];?>"    /><br>
                                    
                                    <input name="driver_phone" type="text-half"  id="driver_phone" value="<?php echo $res2['driver_phone'];?>" placeholder="Driver Phone No"  /><br>
                                   
                                   <input type="text-half" placeholder="Driver Email" id="driver_email" value="<?php echo  $res2['driver_email'];?>" name="driver_email" ><br>
                                    
                                     <input type="text-half" placeholder="Home Address" id="home_address" value="<?php echo  $res2['home_address'];?>"  name="home_address"><br>
                                     
                                     <input type="text-half" placeholder="Driving License#" id="driving_license" value="<?php echo $res2['driving_license'];?>"  name="driving_license" ><br>
                                     
                                     <input type="text-half" placeholder="Operator License#" id="operator_license" value="<?php echo $res2['operator_license'];?>" name="operator_license" ><br>
                                     
		                                 
                                  <select class="selectText" value="" name="type" id="type">
                                      
                                      <option><?php echo $res2['type'];?></option>
                                         <option value="">Car Type</option>
                                         
                                         
                                         <option>Sedan</option>
                                         <option> Station wagon</option>
                                         <option>Compact</option>
                                         <option>Black cab</option>
                                         <option> SUV</option>
                                         <option>Bus</option>
                                         <option>Minibus</option>
                                         <option>Van</option>
                                         <option>Minivan</option>
                                         <option>Limousine</option>
                                         <option>Stretch Limousine</option>
                                         <option> Golf cart</option>
                                         <option>Ambulance</option>
                                     </select>
                                     <br>
                                  
            </div>
            <div class="col-lg-6">
                 <h3><label>Car Details</label></h3>
                                      
		                                
                                     <input type="text-half" placeholder="License Plate" value="<?php echo $res2['license_plate'];?>" name="license_plate" id="license_plate"><br>
                                    <input name="call_sign" type="text-half"  id="call_sign" value="<?php echo $res2['driver_id'];?>" placeholder="Call Sign"/><br>
                                     <input type="text-half" placeholder="Vehicle Number" value="<?php echo  $res2['vehicle_number'];?>" name="vehicle_number" id="vehicle_number"><br>
                                    <select class="selectText" id="wheelchair" value="" name="wheelchair">
                                          <option><?php echo $res2['wheelchair'];?></option>    
                                         
                                        <option value="">Wheelchair#</option>
                                         <option>0</option>
                                         <option>1</option>
                                         <option>2</option>
                                         <option>3</option>
                                         <option>4</option>
                                         <option>5</option>
                                         <option>6</option>
                                         <option>7</option>
                                         <option>8</option>
                                    </select><br>

                                      <select class="selectText" name="bags" value="" id="bags">
                                         
                                         <option><?php echo $res2['pbag'];?></option>
                                         <option value="">Bags</option>
                                         
                                         <option>1</option>
                                         <option>2</option>
                                         <option>3</option>
                                         <option>4</option>
                                         <option>5</option>
                                         <option>6</option>
                                         <option>7</option>
                                         <option>8</option>
                                        </select>
                                      <br>
                                         
                         
    
                                    <select class="selectText" name="passenger" value="" id="passenger">
                                         <option><?php echo  $res2['passenger'];?></option>
                                         <option value="">Passenger#</option>
                                         <option>0</option>
                                         <option>1</option>
                                         <option>2</option>
                                         <option>3</option>
                                         
                                         <option>4</option>
                                         <option>5</option>
                                         <option>6</option>
                                         <option>7</option>
                                         
                                         <option>8</option>
                                         <option>9</option>
                                         
                                          <option>10</option>
                                         <option>11</option>
                                         <option>12</option>
                                         <option>13</option>
                                         
                                         <option>14</option>
                                         <option>15</option>
                                         <option>16</option>
                                         <option>17</option>
                                         
                                         <option>18</option>
                                         <option>19</option>
                                         
                                          <option>20</option>
                                         <option>21</option>
                                         <option>22</option>
                                         <option>23</option>
                                         
                                         <option>24</option>
                                         <option>25</option>
                                         <option>26</option>
                                         <option>27</option>
                                         
                                         <option>28</option>
                                         <option>29</option>
                                         
                                          <option>30</option>
                                         <option>31</option>
                                         <option>32</option>
                                         <option>33</option>
                                         
                                         <option>34</option>
                                         <option>35</option>
                                         <option>36</option>
                                         <option>37</option>
                                         
                                         <option>38</option>
                                         <option>39</option>
                                         
                                          <option>40</option>
                                         
                                         
                                     </select><br>
                                       
		            
		                                
		                                 
                                    <select class="selectText" name="color" value="" id="color">
                                         <option><?php echo $res2['color'];?></option>
                                         <option value="">Color</option>
                                         <option>Yellow</option>
                                         <option>  Red</option>
                                         <option> Green</option>
                                         <option>Blue</option>
                                         <option> Black</option>
                                         <option>White</option>
                                         <option>Orange</option>
                                         <option>Pink</option>
                                         <option>Silver</option>
                                        
                                     </select><br>
                                    
                                    <select class="selectText" name="driver_report" id="">
                                    <option value="<?php echo $res2['report'];?>"><?php echo $res2['report']; ?></option>
                                        
                                         <option value="Include In Reports">Include In Reports</option>
                                        
                                         <option value="Exclude In Report"> Exclude In Reports</option>
                                         
                                        
                                     </select><br>
                                    
                                 
                                 
 
            </div>
             
            
        </div>
        <br>
         <input type="hidden" name="cid" id="cid" />
         <button type="submit" name="actionUpdate" id="action" class="btn">Modify</button>
         <button type="button" class="btn btn-default"><a href="/dispatch/v/createDrivers.php">Close<a>
             </button>
     
    </div>
     <?php
      }
    ?> 
    </form>  
    
    </center>
</div>