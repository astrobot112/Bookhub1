
<!-- creates a new account after sign in -->
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
     $_SESSION['Username'] = $_POST["Username"];
     $_SESSION['Password'] = $_POST["Password"];
$sql = "SELECT Personid FROM User WHERE Username = '".$_SESSION['Username']."'";
 $result = $conn->query($sql);   



if(mysqli_num_rows($result)>=1)
       {
           die(header("location:Signin.php?loginFailed=true&reason=password"));
       }
     else
        {  
      if($_POST["Password"]!=$_POST["repassword"])
{
die(header("location:Signin.php?loginFailed=true&reason=repassword"));
}
else
{ 
$sql4 = "INSERT INTO User (Username,Password)
VALUES ('".$_POST["Username"]."','".$_POST["Password"]."')";







if ($conn->query($sql4) === TRUE) {
   
   header("Location: profile.php");
} else {
    echo "Error: " . $sql4 . "<br>" . $conn->error;
}
}
}
mysqli_close($conn);
?> 



























