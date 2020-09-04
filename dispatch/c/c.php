 <?php
session_start(); 
// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
?> 

<!------------------------------------------------------------------------------>

<!------------------------Keyboard Commands------------------------------------->
<script>
document.onkeyup = function(e) {
if(e.ctrlKey &&e.which == 78) {
    openNav(); 
    
} else if (e.ctrlKey &&e.which ==67 ) {
    closeNav();
    closeNavi();
    
}else if (e.ctrlKey &&e.which == 81) {
    
   location.replace('/dispatch/v/home.php', '_self');
   
} else if (e.ctrlKey &&e.which == 83) {
    
       location.replace('/dispatch/v/settings.php', '_self');
      
} else if ( e.ctrlKey && e.which == 68) {

    location.replace('/dispatch/v/reg_dispatcher.php', '_self');
    
}else if (e.ctrlKey &&e.which == 72) {
    
       location.replace('/dispatch/v/dashboard.php', '_self');
      
}else if (e.ctrlKey &&e.which == 85) {
    
       location.replace('/dispatch/v/createDrivers.php', '_self');
      
}else if (e.ctrlKey &&e.which == 82) {
    
       reload();
      
}else if (e.ctrlKey &&e.which == 70) {
    
       location.replace('/dispatch/v/fare.php', '_self');
      
}
}

</script>
<script>
  function openfare() {
      window.location.href = "/dispatch/v/fare.php";
    }
    function createFare() {
      window.location.href = "/dispatch/v/faresetup.php";
    }
    function openReports() {
      window.location.href = "/dispatch/v/reports.php";
    }
   function TalkToAll() {
       // window.open("/dispatch/chat/newchat.php");
       //window.location.href ="/dispatch/v/chat.php";
      
       location.replace('/dispatch/chat/chatform.php?lt=0&lg=0&uid=all&di=<?php echo $_SESSION['id'];?>&dp=all', '_self');
    }
    function BackToChathome() {
       // window.open("/dispatch/chat/newchat.php");
      // window.location.href ="/dispatch/chat/talkhome.php";
       location.replace('/dispatch/v/dashboard.php?lt=0&lg=0&uid=0&di=0&dp=0', '_self');
    }
   function OpenMap() {
        window.open("/dispatch/v/map.php", '_blank');
     
    }
    
     function OpenJob() {
       location.replace('/dispatch/v/createjb.php', '_self');
     
    }
     
    function refresh() {
      location.reload(); 
    }
   function menu() {
      window.location.href = "/dispatch/v/home.php";
    }
   
    function home() {
     
      location.replace('/dispatch/v/dashboard.php?key=<?php echo $_SESSION['id'];?>', '_self');
    }
   // setTimeout("home()",0 );
    
    function liveCamera() {
        window.open("/dispatch/v/citycamera.php", "_blank");
     // window.location.href = "/dispatch/v/citycamera.php";
    }
    function drivers() {
      window.location.href = "/dispatch/v/createDrivers.php";
    }
    function vehicles() {
      window.location.href = "/dispatch/v/vehicles.php";
    }
    function createdriver() {
      window.location.href = "/dispatch/v/regdriver.php";
    }
    function createVehicle() {
      window.location.href = "/dispatch/v/regdriver.php";
    }
     function createDispatcher() {
      window.location.href = "/dispatch/v/reg_dispatcher.php";
    }
     function suspension() {
      window.location.href = "/dispatch/v/suspension.php";
    }
     function settings() {
      window.location.href = "/dispatch/v/settings.php";
    }
     function signout() {
      window.location.href = "/dispatch/u/signout.php";
    }
     function chat() {
      window.open("/dispatch/chat/hm.php","_blank");     
     // window.location.href = "/dispatch/chat/hm.php";
    }
</script> 
 <?php
///////////////////////////////////////////////////////////////
// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
//////////////////////////////////////////////////////////////
$v="../c/v.php";
$dbc="../c/connection.php";
$nav="../c/nav/nav.php";
$url="../dispatch";
$uri="/dispatch";
$ft="../c/nav/end.php";
$api=$uri."/c/api.php";
$model="../c/m.php";
$api_key=$_SESSION['id'];
////////////////////////////////////////////////////////////////////////

//Dispatcher User registeration
$navu="../c/nav/nav-u.php";


//Register Dispatcher
$reg_dis="<a href='/w/v/reg_dispatcher.php' class='w3-bar-item'>Create Dispatcher</a><br>";
$cdispatcher=$uri."/m/cdispatcher_api.php";

//home
$home="<a href='../v/home.php' class='w3-bar-item w3-button w3-padding'><b>Home</b></a>";

//jobs
$cjob="createjb.php";
$createjobapi=$url."../m/cjob_api.php";
$jobslistapi=$url."../m/jobslist_api.php";
$jobseditapi=$url."../m/editjob_api.php";
$jobsdelete=$url."deletejob_api.php";
$jobsearch="../m/jobs_search.php";
$job="job.php";


//driver apis
$createdrivers="../v/driver.php";
$driverslistapi="../m/driverslist_api.php";
$createdriverapi="../m/driver_api.php";
//edit driver apis
$editdriver="../v/editdriver.php";
$editdriverapi="../m/editdriver_api.php";

//create taxi 
$createvehicleapi="../m/vehicle_api.php";
$createtaxi="../v/vehicle.php";
$vehiclelistapi='../m/vehiclelist_api.php';
$editvehicleapi='../m/editvehicle_api.php';











$closedjob="<label id='closedjob'  class='w3-bar-item'>Closed Jobs</label>";
$sjob="searchj.php";
$searchjob="<label id='searchjob' class='w3-bar-item w3-button w3-padding'>Search Jobs</label>";
//Customer
$cust="customer.php";
$customer="<label id='myBtn3' class='w3-bar-item w3-button w3-padding'>Customers</label>";
$alarms="<label id='myBtn' class='w3-bar-item w3-button w3-padding'>Alarms</label>";
$messages="<label id='myBtn' class='w3-bar-item w3-button w3-padding'>Messages</label>";
$alerts="<label id='myBtn' class='w3-bar-item w3-button w3-padding'> Alerts</label>";
$suspensions="<label id='myBtn' class='w3-bar-item w3-button w3-padding'>Suspensions</label>";
$perferences="<label id='myBtn' class='w3-bar-item w3-button w3-padding'>Perferences</label>";
$vehicles="<label id='myBtn' class='w3-bar-item w3-button w3-padding'>Vehicles</label>";
$drivers="<label id='myBtn' class='w3-bar-item w3-button w3-padding'>Drivers-Users</label>";		

//logout api
$logout="<a  class='w3-bar-item w3-button w3-padding' href=".$uri."/u/signout.php>Sign Out</a>";

$vlist="vlist.php";





?>
<!------------------------Data Display in Dashboard----------------------------->
<script type=""> 
$(document).ready(function(){
 fetch_timeDate();
	setInterval(function(){
	fetch_timeDate();
	},1000);
function fetch_timeDate(){
		$.ajax({
			url:"/dispatch/m/dashbaordAPI/dateTime.php",
			method:"POST",
			success:function(data){
				$('#clock').html(data);
			}
		})
	}
});
</script>