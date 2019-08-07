
<!-- forms book clubs -->
<?php
  session_start();
  $name= $_POST["Clubname"];
 

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
$comment=$_POST["comment"];
$Username=$_SESSION['Username'];
$Password=$_SESSION['Password'];


$_SESSION['tablename']="$Username";
$sql4 = "INSERT INTO Newuser (clubname)
VALUES ('".$name."')";
if ($conn->query($sql4) === TRUE) {
   
   header("Location: profile_page.php");
} else {
    echo "Error: " . $sql4 . "<br>" . $conn->error;
}


?>
