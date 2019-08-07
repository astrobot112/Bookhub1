
<!-- html page where read book and write review options are available before logging in-->
 <?php
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
;
     $Book_icon = $_GET["src"]; 

$sql = "SELECT Bookname, Book_id, genre FROM Books WHERE Book_icon = '".$Book_icon."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Bookname = $row["Bookname"];
        $genre = $row["genre"];
        $Book_id= $row["Book_id"];
    
    }
}

?>






<html>
<head>
<style>
#comment {
  position: absolute;
    left: 500px;
    top: 100px;
    width: 400px;
    height: 400px;
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
    top:100px;
    left:300px;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100px;
}
button.sign {
    background-color: #4CAF50;
    position:absolute;
    top:100px;
    left:410px;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100px;
}
button:hover {
    opacity: 0.8;
}
</style>
</head>
<body>
<h1> <?php echo $Book_id ;?> </h1>
<img src="<?php echo $genre."/".$Book_icon ?>" height="300px" width="250px">
<div class="container1">
  
   <form action="<?php echo "images/".$Bookname ; ?>" >   
    <button type="submit" class="log">Read</button>    
</form>
</header>

</div>
<div id="comment">
<p><font color="Black"><i> Reviews: </i></font></p>

<div id="c">
<?php 
$sql5 = "SELECT Username, Comment FROM HUCK";
$result = $conn->query($sql5);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo '<p><font color="Black" size="-1"><i><b>'.$row["Username"].'</b></i></font></p>';
  echo $row["Comment"];
    
    }
} else {
    echo "0 Comments";
}
mysqli_close($conn);
?>
<br>
<br>
<a href="logintocomment.php">Log In To Review</a>

</div>
</body>
</html>
