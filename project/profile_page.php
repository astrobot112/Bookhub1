
<!-- user profile html page -->
<!DOCTYPE html>
<html>
<style>
#comment {
  position: absolute;
    left: 0px;
    right: 0px;
    top: 340px;
    
    height: 310px;
    border: 3px solid Black;
    overflow-y: auto;
    padding: 10px;
}
#c {
  background-color: lightgrey;
  padding: auto;
}
button.log {
    background-color: #4CAF50;
    position:absolute;
    top:250px;
    right:10px;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 200px;
}
input.log4 {
    background-color: White;
    position:absolute;
    top:251px;
    right:220px;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 200px;
}
h2 {
   text-align: center;
}
input[type=text], input[type=password] {
    
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

.container3 {
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
<div class="imgcontainer">
    <img src="2.png" alt="Avatar" class="avatar">
 <br>
<br> 
<?php 
 session_start();
echo $_SESSION['Username'];
?>
</div>
<div class="container"> 
<div class="container3"> 
 <form action="club.php">       
<input class="1" type="text" placeholder="Club Name" width='150' name="Clubname" style="position:absolute;top:250px;right:230px">   
 

 </div>       
<button type="submit" class="log">Create A New Club</button>   

</form> 
 </div>
<div class="listgrps">
</div> 
</style>
<div id="comment">
<p><font color="Black"><i> Groups: </i></font></p>


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
$sql5 = "SELECT clubname FROM Newuser";
$result = $conn->query($sql5);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo $row["clubname"];
      echo 1;
     
    }
} else {
    echo "NO Groups";
}
mysqli_close($conn);
?>

</div>
  

</body>
</html>
