<?php 
session_start(); 
include('../c/c.php');

include($dbc);
?>

<?php
if(isset($_POST['addpro'])) {
    
    $name = $_POST['name'];
    $com = $_POST['company'];
	$phone = $_POST['phone'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$compId = $_POST['companyId'];
	$location= $_POST['location'];
	$ip= $_SERVER['REMOTE_ADDR'];
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $page = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['PHP_SELF'];
    $referrer = $_SERVER['HTTP_REFERER'];
    $datetime = date("F j, Y, g:i a");
    $useragent = $_SERVER['HTTP_USER_AGENT'];
    
	 $sql="INSERT INTO taxi_company(name,username,companyId,phone,email,password,location,ip,referer,organization) VALUES('$name','$username','$compId','$phone','$email','$pass','$location','$ip','$referrer','$com')";
   
   $result=mysqli_query($conn, $sql);
	if ($result != null) {
      $reg="Thanks, You Have Been Registered As a Client
      An Email of Confirmation Has Been Sent to You.
      ";    
	  header("refresh: 4; /dispatch/u/signin_ow.php"); 
	 
	 

   $system="system@masterydispatch.com";
   $temail = $system;
$subject1 = "New Client Registery Alert To MasteryDispatch";
$message1 = "A new person sucessfully has been registered to your system this is the info, Name:".$name.",Email:".$email.",Phone:".$phone."Location:".$location;
$headers1 = "From: system@masterydispatch.com";

 
    mail($temail, $subject1, $message1, $headers1);
	
$to_email = $email;
$subject = "MasteryDispatch System,Registeration Details";
$message = "Thanks For Registeration,We inform you that you and your company have been sucessfully registered in Mastery Dispatch System, You can instantly start using this system; following details are the credentials for you as owner/admin you can login in and create accounts for your company dispatchers:,Name:".$name."Email:".$email.",Phone:".$phone.",Location:".$location."Username:".$username."Password:".$password."Company Id:".$compId;
$headers = "From: system@masterydispatch.com";

 
    mail($to_email, $subject, $message, $headers);
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    $reg="Not Registered, Try Again Now";
    header("refresh: 3; url = https://cloud.aidispatchsys.com/dispatch/u/signup.php");
}

mysqli_close($conn);
	
}
       
?>
   

<body>
       

            
    <?php include('../c/nav/nav-u.php');?>
         


       
        <center> <h4><b>Register Your Company</b></h4> </center>
   
            <div class="container">
            <form action="" method="POST">

                <div class="row">
                    
                    
                           <div class="col-25">
                              <?PHP echo $reg; ?>
                              <form action=""  name="signup" method="post" >
                                         
                                     <label></label>
                                       <input type="text" placeholder="Full Name" name="name" required />
                                   <label> </label>
                                        <input name="phone" type="text" value="" placeholder="Mobile No" required />
      
                                   <label> </label>
                                   <input type="text" placeholder="Email" name="email" required>
                                   <label> </label>
                                   <input type="text" placeholder="Username" name="username" required>
                                   
                                   <label> </label>
                                   <input type="text" placeholder="Password" name="password" required>
      
                                   <label></label>
                                     <input type="text" placeholder="Location" name="location" required>
                                      <label></label>
                                     <input type="text" placeholder="Company" name="company" required>
                                      <label></label>
                                     <input type="text" placeholder="Company Id" name="companyId" required>
                                     
                                     
                                     <hr>
                                     <button type="submit"  class="btn btn-default" name='addpro'>Register</button>
                         <button type="reset" class="btn btn-default">Clear Form </button>
                            </div>
                          
                 </div>
                
                
                <div class="row">
                         
                </div>
 
            </form>
            
        
        </div>
        
<div class="footer">
   
</div>