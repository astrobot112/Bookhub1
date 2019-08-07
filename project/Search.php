
<!-- search book after login -->
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

$sql = "SELECT Bookname, Book_icon, genre FROM Books WHERE Book_id = '".$Book_id."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $bookname = $row["Bookname"];
        $bookgenre = $row["genre"];
        $bookicon= $row["Book_icon"];
    
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>















<html>
<head>
<style>
input[type=text] {
    width: 150px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 500px;
}
div.container {
   
    height: 100px;
    border: 0.1px solid gray;
    margin: 0 0 0 0;
border-style: solid;
padding: 0;
}

button.log {
    background-color: #4CAF50;
    position:absolute;
    top:20px;
    right:210px;
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
    top:20px;
    right:100px;
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


<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $bookicon;?>" />
    <input type="image" id="n" src="<?php echo $bookgenre."/".$bookicon;?>"
width='200' height='200' style="position:absolute;top:180px;left:300px;visibility:visible"/> 
</form>

</body>
</html>
