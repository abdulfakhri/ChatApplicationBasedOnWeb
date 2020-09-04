<?php include('../c/api.php');?>
<?php include ('../c/c.php');?>
<?php include ($nav);?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
  
<style>


/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  padding-top: 10px; /* Location of the box */
  padding-left: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  left: 20%;
  top: 20%;
  right:20%;
  bottom:20%;
  width: 50%; /* Full width */
  height: 50%; /* Full height */
  background-color: #001; /* Fallback color */
  border:1px solid #fff;
  border-radius: 5px;
 
}

/* Modal Content */
.modal-content {
  background-color: ;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
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
  
  
  <h3>Create Dispatcher</h3>
  <!--openJobsDetail()-->
   <div align="left">
    <button type="button" id="modal_button" class="btn">Create Dispatcher Account</button>
   </div>
   <br />
   <div id="result" class="table-responsive"></div>
  
  
 

<!-- This is Customer Modal. It will be use for Create new Records and Update Existing Records!-->
<div id="customerModal" class="modal">
  
  
  
    <label>Name</label>
    <input type="text" name="first_name" id="first_name" class="form-control" />
    
                                    
   <label>Password</label>
    <input type="text" name="password" id="password" class="form-control" />
    
    <br />
   <input type="hidden" name="cid" id="cid" />
    <input type="submit" name="action" id="action" class="btn" />
    <button type="button" name="close" id="close" class="btn" data-dismiss="modal">Close</button>
    
</div>
 
</div>
<script>
// Get the modal
var modal = document.getElementById("customerModal");

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
/*
function openJobsDetail() {
  document.getElementById("customerModal").style.width = "80%";
}

function closeJobsDetail() {
  document.getElementById("customerModal").style.width = "0";
}
*/
</script>

<script>
$(document).ready(function(){
 fetchUser(); //This function will load all data on web page when page load
 function fetchUser(){ // This function will fetch data from table and display under <div id="result">
  var action = "Load";
  $.ajax({
   url : "/dispatch/m/dispatcherAPI/actionDispatch.php", //Request send to "action.php page"
   method:"POST", //Using of Post method for send data
   data:{action:action}, //action variable data has been send to server
   success:function(data){
    $('#result').html(data); //It will display data under div tag with id result
   }
  });
 }
  //var companyid='<?php //echo $_SESSION['companyId'];?>';
 //This JQuery code will Reset value of Modal item when modal will load for create new records
 $('#modal_button').click(function(){
  $('#customerModal').modal('show'); //It will load modal on web page
  $('#first_name').val(''); //This will clear Modal first name textbox
  $('#companyid').val(''); //This will clear Modal last name textbox
  $('#password').val(''); //This will clear Modal last name textbox
  $('.modal-title').text("Create New Records"); //It will change Modal title to Create new Records
  $('#action').val('Create'); //This will reset Button value ot Create
 });

 //This JQuery code is for Click on Modal action button for Create new records or Update existing records. This code will use for both Create and Update of data through modal
 $('#action').click(function(){
  var firstName = $('#first_name').val(); //Get the value of first name textbox.
  var password = $('#password').val(); //Get the value of first name textbox.
  var companyid = $('#companyid').val(); //Get the value of last name textbox
  var id = $('#cid').val();  //Get the value of hidden field customer id
  var action = $('#action').val();  //Get the value of Modal Action button and stored into action variable
  if(firstName != '' && companyid != '') //This condition will check both variable has some value
  {
   $.ajax({
    url : "/dispatch/m/dispatcherAPI/actionDispatch.php",    //Request send to "action.php page"
    method:"POST",     //Using of Post method for send data
    data:{firstName:firstName, companyid:companyid, id:id,password:password, action:action}, //Send data to server
    success:function(data){
     alert(data);    //It will pop up which data it was received from server side
     $('#customerModal').modal('hide'); //It will hide Customer Modal from webpage.
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
   url:"/dispatch/m/dispatcherAPI/actionDispatch.php",   //Request send to "action.php page"
   method:"POST",    //Using of Post method for send data
   data:{id:id, action:action},//Send data to server
   dataType:"json",   //Here we have define json data type, so server will send data in json format.
   success:function(data){
    $('#customerModal').modal();   //It will display modal on webpage
    $('.modal-title').text("Update Records"); //This code will change this class text to Update records
    $('#action').val("Update");     //This code will change Button value to Update
    $('#cid').val(id);     //It will define value of id variable to this customer id hidden field
    $('#first_name').val(data.first_name);  //It will assign value to modal first name texbox
    $('#companyid').val(data.companyid);  //It will assign value of modal last name textbox
    $('#password').val(data.password);
   }
  });
 });

 //This JQuery code is for Delete customer data. If we have click on any customer row delete button then this code will execute
 $(document).on('click', '.delete', function(){
  var id = $(this).attr("id"); //This code will fetch any customer id from attribute id with help of attr() JQuery method
  if(confirm("Are you sure you want to remove this Dispatcher?")) //Confim Box if OK then
  {
   var action = "Delete"; //Define action variable value Delete
   $.ajax({
    url:"/dispatch/m/dispatcherAPI/actionDispatch.php",    //Request send to "action.php page"
    method:"POST",     //Using of Post method for send data
    data:{id:id, action:action}, //Data send to server from ajax method
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
 <?php include($ft);?>