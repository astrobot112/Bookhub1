
<!-- verifies username and password -->
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "sairam98";
$dbname = "bookproject";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql2 = "USE $dbname";

if ($conn->query($sql2) === TRUE) {
   
} else {
    echo "Error creating database: " . $conn->error;
}
   // username and password sent from form 

     $_SESSION['Username'] = $_POST["Username"];
     $_SESSION['Password'] = $_POST["Password"]; 
$sql = "SELECT Personid FROM User WHERE Username = '".$_SESSION['Username']."' and Password = '".$_SESSION['Password']."'" ;
 $result = $conn->query($sql);    
if(mysqli_num_rows($result)>=1)
       {
          header("Location: profile.php");
       

       }
     else
        {  
        die(header("location:login.php?loginFailed=true&reason=password"));
        }
   
?>
