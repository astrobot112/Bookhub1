
<!-- inserts reviews into html -->
<?php
  session_start();
  echo $_POST["comment"];
 

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
$getid = $_SESSION['getid']; 
$geticon = $_SESSION['geticon'];
$getname = $_SESSION['getname'];

$_SESSION['tablename']="HUCK";
$sql4 = "INSERT INTO HUCK (Username,Comment)
VALUES ('".$Username."','".$comment."')";
if ($conn->query($sql4) === TRUE) {
   
   header("Location: read_book.php");
} else {
    echo "Error: " . $sql4 . "<br>" . $conn->error;
}


?>
