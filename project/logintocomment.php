
<!-- html form for login to comment-->
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

     $Book_id = $_POST["search"]; 
 $getid = $_SESSION['getid']; 
$geticon = $_SESSION['geticon'];
$getname = $_SESSION['getname'];
$tablename="HUCK";
?>

<!DOCTYPE html>
<html>
<style>
h2 {
   text-align: center;
}
input[type=text], input[type=password] {
    width: 300px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 200px;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 200px;
    border-radius: 50%;
}

.container {
    padding: 16px;
    text-align: center;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 200px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

<h2>Login Form</h2>
  <div class="container">
 <form action="Loginforcomment.php" method="post"> 
<div class="imgcontainer">
    <img src="2.png" alt="Avatar" class="avatar">
  </div>

    <label><b>Username</b></label><br>
     <input class="1" type="text" placeholder="Enter Username" width='200' height='200' name="Username" required><br>

    <label><b>Password</b></label><br>
    <input class="2" type="password" placeholder="Enter Password" width='200' height='200' name="Password" required><br>
<div class="container" >        
<button type="submit">Login</button><br>
<p>
<br>
<?php $reasons = array("password" => "Wrong Username or Password", "blank" => "You have left one or more fields blank."); if ($_GET["loginFailed"]) echo $reasons[$_GET["reason"]]; ?>
</div>
</form>    
     
    
  

  

</body>
</html>
