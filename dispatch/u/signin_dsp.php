<?php 

session_start(); 
//include('../c/c.php');
include('../c/connection.php');
//include($dbc);
if(isset($_POST['sign'])) {
    $pass = $_POST['password'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
    $username = $_POST['username'];
    $compId = $_POST['companyId'];
$ret=mysqli_query($conn,"SELECT * FROM taxi_company WHERE companyId='$compId' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0){
            $validuser = $num['id'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $num['organization'];
			$_SESSION['username'] = $num['username'];
			$_SESSION['email'] = $num['email'];
			$_SESSION['id'] = $num['id'];
			$_SESSION['companyId'] = $num['companyId'];
            $_SESSION['password'] = $num['password'];
            $_SESSION['mode'] = $num['background'];
            $_SESSION['title'] = $num['title'];
            
			header('location: /dispatch/v/home.php'); 

}else{
$msg="Invalid username or password";
}

}

?>
   
<?php 
   //include($navu);
   include('../c/nav/nav-u.php');
   ?>
   
 <body bgcolor="#E6E6FA">

        <!-- Top container -->
        <div class="w3-bar w3-top w3-green w3-large" style="z-index:4">
            
            <span class="w3-bar-item w3-right">aiDispatchSys</span>
             <span class="w3-bar-item w3-left">  <a href="/index.php">Home</a></span>
             
        </div>
        <br>
       

            
   
         


       
        <center> <h4><b>Dispatcher</b></h4> <br>
        <img  src="aid.png" alt="" width="" height="">
             </center>
             <br>
            <div class="container">
            

                <div class="row">
                    
                    
                           <div class="col-25">
                              
                              
                              <form action=""  name="sigin" method="post" >
                                       
                                       <label></label>
                                       <input type="text" placeholder="Company Code" name="companyId"  />     
                                       
                                       <label> </label>
                                       <input name="password" type="text" value="" placeholder="Password" required />
      
                                   
                                   
                                     <?PHP echo $reg; ?>
                                     <hr>
                                     <button type="submit"  class="btn btn-default" name='sign'>Sign In</button>
                                     <button type="reset" class="btn btn-default">Clear</button>
                    
                          </form>
            
                           </div>
                    </div>
        
             </div>