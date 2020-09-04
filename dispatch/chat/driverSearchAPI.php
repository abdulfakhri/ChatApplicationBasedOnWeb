<?php
session_start();
include('../c/api.php');
include('../c/c.php');
include('../c/connection.php');
?>  
<?php
    
    //Getting value of "search" variable from "script.js".
    //include_once("connection.php");
    if (isset($_POST['search'])) {
    //Search box value assigning to $Name variable.
       $Name = $_POST['search'];
       $loginId=$_SESSION['id'];
    //Search query.
       $Query = "SELECT * FROM taxi_drivers WHERE taxi_comp='$apiKey'";
    //Query execution
       $ExecQuery = MySQLi_query($con, $Query);
       
   
        //echo "Error: " . $Query . "<br>" . $con->error;
     
    //Creating unordered list to display result.
       echo '
    <ul>
       ';
       //Fetching result from database.
       while ($Result = MySQLi_fetch_array($ExecQuery)) {
           ?>
       <!-- Creating unordered list items.
            Calling javascript function named as "fill" found in "script.js" file.
            By passing fetched result as parameter. -->
         
           
       <li onclick='fill("<?php echo $Result['driver_id']; ?>")'>
       
       <a>
       <!-- Assigning searched result in "Search box" in "search.php" file. -->
           
           <?php echo $Result['driver_id'];?>
           
          </li>
       </a>
       
       <!-- Below php code is just for closing parenthesis. Don't be confused. -->
       <?php
    }
    }
    ?>
    </ul>