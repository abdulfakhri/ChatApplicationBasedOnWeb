<?php 
$rootDir = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$rootDir/dispatch/c/api.php";
include "$rootDir/dispatch/c/c.php";

include($nav);

include "$rootDir/dispatch/m/driverAPI/driverCreateAPI.php";

?>


<div id="driverModal" class="modal">
  
    <form action="" method="POST">
    <div id="driverModal" class="modal-content">
        
            <div class="col-lg-6" style="background-color:<?PHP echo $colormodeComponent;?>;  border-radius:5px;width50%:; border:px solid #ccc">
            <h3><label>Drivers Details</label></h3>
                
                 <input type="text-half"  placeholder="Driver Name" id="driver_name" name="driver_name"  /><br>
                                     <input name="call_sign" type="text-half" value=""  id="call_sign" placeholder="Drv#/Call Sign"/><br>
                                    <input name="driver_phone" type="text-half"  id="driver_phone" value="" placeholder="Driver Phone No"/><br>
                                   
                                   <input type="text-half" placeholder="Driver Email" id="driver_email" name="driver_email" ><br>
                                    
                                     <input type="text-half" placeholder="Home Address" id="home_address" name="home_address"><br>
                                      
                            
                                     <input type="text-half" placeholder="Driving License#" id="driving_license"  name="driving_license" ><br>
                                     
                                     <input type="text-half" placeholder="Operator License#" id="operator_license" name="operator_license"><br>
                                    <select class="selectText" name="driver_report" id="">
                                         <option value="">Report</option>
                                         <option value="Include In Reports">Include In Reports</option>
                                        
                                         <option value="Exclude In Report"> Exclude In Reports</option>
                                         
                                        
                                     </select><br>
                                  
                                     
                                     
            
             
                                 
                                   
            </div>
           <div class="col-lg-6" style="background-color:<?PHP echo $colormodeComponent;?>;  border-radius:5px;width50%:; border:px solid #ccc">
           
                <h3><label>Car Details</label></h3>
                <!--Sedan, SUV SUBURBAN, Minivan-->
                                   <select class="selectText" name="type" id="type">
                                         <option value="">Car Type</option>
                                         <option>Sedan</option>
                                        
                                         <option> SUV</option>
                                         <option>SUBURBAN</option>
                                        
                                         <option>Minivan</option>
                                        
                                     </select><br><br>
                                     <input type="text-half" placeholder="License Plate" name="license_plate" id="license_plate"><br>
                                   <input type="text-half" placeholder="Vehicle#" name="vehicle_number" id="vehicle_number"><br>
                                    <select class="selectText" id="wheelchair" name="wheelchair">
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
                                    </select><br><br>

                                      <select class="selectText" name="bags"  id="bags">
                                         <option value="">Bags</option>
                                         <option>0</option>
                                         <option>1</option>
                                         <option>2</option>
                                         <option>3</option>
                                         <option>4</option>
                                         <option>5</option>
                                         <option>6</option>
                                         <option>7</option>
                                         <option>8</option>
                                        </select>
                                      <br><br>
                                         
                         
    
                                    <select class="selectText" name="passenger" id="passenger">
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
                                         
                                         
                                     </select><br><br>
  
                                    <select class="selectText" name="color" id="color">
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
                                        
                                     </select><br><br>
                                    
                                    
                                    
                                 
                                   
            </div>
           <div class="col-lg-12" style="background-color:<?PHP echo $colormodeComponent;?>;  border-radius:5px;width:; border:px solid #ccc">
           
         <input type="hidden" name="cid" id="cid" />
         <input type="submit" name="actionCreate" id="action" class="btn btn-success" />
         <button type="button" class="btn btn-default"><a href="/dispatch/v/createDrivers.php">Close</a></button>
         </div>
      </div>
    </form> 
   
    
 </div>
  
  <h3>Register Drivers</h3>
   
 
   <div align="left">
    <button type="button" class="btn" id="modal_button" >Create Driver Account</button>
   </div>
   
   <div id="result" class="table-responsive"></div>
  
 
  
<script>
// Get the modal
var modal = document.getElementById("driverModal");


// Get the button that opens the modal
var btn = document.getElementById("modal_button");

// Get the <span> element that closes the modal
//var closebtn = document.getElementsByClassName("close")[0];
var closebtn = document.getElementById("close");

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}



// When the user clicks on <span> (x), close the modal
closebtn.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>

<script>
$(document).ready(function(){
 fetchUser(); //This function will load all data on web page when page load
 function fetchUser(){ // This function will fetch data from table and display under <div id="result">
  var action = "Load";
  $.ajax({
   url : "/dispatch/m/driverAPI/driver_api.php", //Request send to "action.php page"
   method:"POST", //Using of Post method for send data
   data:{action:action}, //action variable data has been send to server
   success:function(data){
    $('#result').html(data); //It will display data under div tag with id result
   }
  });
 }
  
  
 //This JQuery code will Reset value of Modal item when modal will load for create new records
$('#modal_button').click(function(){
  $('#driverModal').modal('show'); //It will load modal on web page
  $('#driver_name').val(''); //This will clear Modal first name textbox
  $('#driver_email').val(''); //This will clear Modal last name textbox
  $('#home_address').val(''); //This will clear Modal first name textbox
  $('#driver_phone').val(''); //This will clear Modal last name textbox
  $('#driver_level').val(''); //This will clear Modal last name textbox
  $('#driving_license').val(''); //This will clear Modal last name textbox
  $('#operator_license').val(''); //This will clear Modal last name textbox
  $('#call_sign').val(''); //This will clear Modal first name textbox
  $('#wheelchair').val(''); //This will clear Modal last name textbox
  $('#bags').val(''); //This will clear Modal last name textbox
  $('#type').val(''); //This will clear Modal first name textbox
  $('#passenger').val(''); //This will clear Modal last name textbox
  $('#color').val(''); //This will clear Modal last name textbox    
  $('#license_plate').val(''); //This will clear Modal last name textbox
  $('#image').val(''); //This will clear Modal last name textbox
  $('.modal-title').text("Create New Records"); //It will change Modal title to Create new Records
  $('#action').val('Create'); //This will reset Button value ot Create
 });
 //This JQuery code is for Click on Modal action button for Create new records or Update existing records. This code will use for both Create and Update of data through modal
 $('#action').click(function(){
var driver_name=$('#driver_name').val();  
var driver_email=$('#driver_email').val();  
var home_address=$('#home_address').val();  
var driver_phone=$('#driver_phone').val();  
var driving_license=$('#driving_license').val();  
var driver_level=$('#driver_level').val();  
var operator_license=$('#operator_license').val();  
var driver_license=$('#driver_license').val(); 
var call_sign=$('#call_sign').val(); 
var passenger=$('#passenger').val(); 
var wheelchair=$('#wheelchair').val(); 
var bags=$('#bags').val(); 
var type=$('#type').val(); 
var image=$('#image').val(); 
var color=$('#color').val(); 
var license_plate=$('#license_plate').val(); 
var driver_id = $('#cid').val(); 
var driverId = $('#driverId').val();
//Get the value of hidden field customer id
var action = $('#action').val();  //Get the value of Modal Action button and stored into action variable
if(driver_name!=''&& driver_phone!='') //This condition will check both variable has some value
{
$.ajax({
url : "/dispatch/m/driverAPI/driver_api.php",    //Request send to "action.php page"
method:"POST",     //Using of Post method for send data
data:{
driver_name:driver_name,  
driver_email:driver_email,
home_address:home_address,
driver_phone:driver_phone,
driving_license:driving_license,
driver_level:driver_level,
operator_license:operator_license,
driver_license:driver_license,
call_sign:call_sign,
passenger:passenger,
wheelchair:wheelchair,
bags:bags,
type:type,
image:image,
driver_id:driver_id,
color:color,
license_plate:license_plate,
action:action
    }, //Send data to server
    success:function(data){
     alert(data);    //It will pop up which data it was received from server side
     $('#driverModal').modal('hide'); //It will hide Customer Modal from webpage.
     fetchUser();    // Fetch User function has been called and it will load data under divison tag with id result
    }
   });
  }
  else
  {
   alert("Both Fields are Required"); //If both or any one of the variable has no value them it will display this message
  }
 });

 //This JQuery code is for Update customer data. If we have click on any customer row update button then this code will execute
 $(document).on('click', '.update', function(){
  var id = $(this).attr("id"); //This code will fetch any customer id from attribute id with help of attr() JQuery method
  var action = "Select";   //We have define action variable value is equal to select
  $.ajax({
   url:"/dispatch/m/driverAPI/driver_api.php",   //Request send to "action.php page"
   method:"POST",    //Using of Post method for send data
   data:{id:id, action:action},//Send data to server
   dataType:"json",   //Here we have define json data type, so server will send data in json format.
   success:function(data){
    $('#customerModal').modal();   //It will display modal on webpage
    $('.modal-title').text("Update Records"); //This code will change this class text to Update records
    $('#action').val("Update");     //This code will change Button value to Update
    $('#cid').val(driver_id);     //It will define value of id variable to this customer id hidden field
    
    $('#driver_name').val(data.driver_name);  //It will assign value to modal first name texbox
    $('#driver_phone').val(data.driver_phone);  //It will assign value of modal last name textbox
    $('#driver_license').val(data.driver_license);
   }
  });
 });

 //This JQuery code is for Delete customer data. If we have click on any customer row delete button then this code will execute
 $(document).on('click', '.delete', function(){
  var driverId = $(this).attr("id"); //This code will fetch any customer id from attribute id with help of attr() JQuery method
  if(confirm("Are you sure you want to remove this Driver?")) //Confim Box if OK then
  {
   var action = "Delete"; //Define action variable value Delete
   $.ajax({
    url:"/dispatch/m/driverAPI/driver_api.php",    //Request send to "action.php page"
    method:"POST",     //Using of Post method for send data
    data:{driverId:driverId, action:action}, //Data send to server from ajax method
    success:function(data){
     fetchUser();    // fetchUser() function has been called and it will load data under divison tag with id result
     alert(data);    //It will pop up which data it was received from server side
    }
   })
  }else{  //Confim Box if cancel then 
   return false; //No action will perform
  }
 });
});
</script>
<?php include ($ft);?>