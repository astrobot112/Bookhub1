
<!--html page displayed after logging in with profile name at top and logout button-->
<?php
session_start();
     $Username=$_SESSION['Username'];
     $Password=$_SESSION['Password'];

?>
<?php
/* adventure genre */
$myarray1 = array();
$fo=opendir("adventure/");
$c=0;
while($file=readdir($fo))
{
if($file!="." && $file!=".." && $file!="Thumbs.db")
{
$myarray1[$c] = $file;
$c++;
}
}
/* biography genre */
$myarray2 = array();
$fo=opendir("biography/");
$c=0;
while($file=readdir($fo))
{
if($file!="." && $file!=".." && $file!="Thumbs.db")
{
$myarray2[$c] = $file;
$c++;

}
}
/* mystery genre */
$myarray3 = array();

$fo=opendir("mystery/");
$c=0;
while($file=readdir($fo))
{
if($file!="." && $file!=".." && $file!="Thumbs.db")
{
$myarray3[$c] = $file;
$c++;

}
}
/* fiction genre */
$myarray4= array();

$fo=opendir("fiction/");
$c=0;
while($file=readdir($fo))
{
if($file!="." && $file!=".." && $file!="Thumbs.db")
{
$myarray4[$c] = $file;
$c++;

}
}
?>
<html>
<head>
<!-- design -->
<style>
div.container1 {
position:absolute;
    top:20px;
    right:200px;}

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
button.log1 {
    background-color: #4CAF50;
    
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100px;
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
    right:50px;
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
  <script type="text/javascript">
    var i=3;
   var j=0;
   var k=document.getElementById("x");
   var c = 4;

    function nextImage(){
if(i==c-1)
{
i==3;
}
else
{
j++;

var imn=document.getElementById("m");
var imo=document.getElementById("o");
var imp=document.getElementById("p");
var imq=document.getElementById("q");
var i1=document.getElementById(i+1);
imn.src=imo.src;
imo.src=imp.src;
imp.src=imq.src;
imq.src=i1.src;
i++; }}
    
    function previousImage(){
if(j==0)
{
}
else
{
var imn=document.getElementById("m");
var imo=document.getElementById("o");
var imp=document.getElementById("p");
var imq=document.getElementById("q");
var i1=document.getElementById(j-1);
imq.src=imp.src;
imp.src=imo.src;
imo.src=imn.src;
imn.src=i1.src;
j--;
i--;
}
   }
function firstImage(){
var im=document.getElementById("n");
var i1=document.getElementById(0);
im.src=i1.src;
i=0;
   }
function lastImage(){
var im=document.getElementById("n");
var i1=document.getElementById(c-1);
im.src=i1.src;
i=c-1;
   }
    
    </script>
</head>
<body>

<div class="container" style="background-color:#34a7ab;">

<header>
   <h1 align="left">BookHub</h1>
<div class="container1">
  
<form action="profile_page.php">       
<button type="submit" class="log1"> <?php 
session_start();
$x=$_SESSION['Username'];
echo $x; ?></button>   

</form>
 
</div>
   <form action="logged.php">       
<button type="submit" class="log">Log out</button>   

</form>

</header>

</div>

<form action="Search.php" method="post">
  <input type="text" name="search" placeholder="Search" style="position:absolute;top:120px;left:600px">
      


</form>
<h2 style="position:absolute;top:110px;left:300px"> Adventure Books </h2>
<input type="image" class="close" onclick="previousImage();" src="previous.jpg" style="position:absolute;left:250px;top:250px;height:50px;width:50px" />

<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $myarray1[0]?>" />
    <input type="image" id="n" src="<?php echo "adventure/".$myarray1[0]?>" width='200' height='200' style="position:absolute;top:180px;left:300px;visibility:visible"  /> 
</form>
<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $myarray1[1]?>" />
<input type="image" id="n" src="<?php echo "adventure/".$myarray1[1]?>" width='200' height='200' style="position:absolute;top:180px;left:520px;visibility:visible" />
</form>
<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $myarray1[2]?>" />
<input type="image" id="n" src="<?php echo "adventure/".$myarray1[2]?>" width='200' height='200' style="position:absolute;top:180px;left:760px;visibility:visible" />
</form>
<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $myarray1[3]?>" />
<input type="image" id="n" src="<?php echo "adventure/".$myarray1[3]?>" width='200' height='200' style="position:absolute;top:180px;left:1000px;visibility:visible" />
</form>

<input type="image" onclick="nextImage();" src="next.jpg" style="position:absolute;left:1210px;top:250px;height:50px;width:50px"/>


<h2 style="position:absolute;left:300px;top:400px"> Biographies </h2>

<input type="image" class="close" onclick="previousImage();" src="previous.jpg" style="position:absolute;left:250px;top:540px;height:50px;width:50px" />
<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $myarray2[0]?>" />
    <input type="image" id="n" src="<?php echo "biography/".$myarray2[0]?>" width='200' height='200' style="position:absolute;top:470px;left:300px;visibility:visible"/> 
</form>
<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $myarray2[1]?>" />
<input type="image" id="n" src="<?php echo "biography/".$myarray2[1]?>" width='200' height='200' style="position:absolute;top:470px;left:520px;visibility:visible"/>
</form>
<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $myarray2[2]?>" />
<input type="image" id="n" src="<?php echo "biography/".$myarray2[2]?>" width='200' height='200' style="position:absolute;top:470px;left:760px;visibility:visible"/>
</form>
<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $myarray2[3]?>" />
<input type="image" id="n" src="<?php echo "biography/".$myarray2[3]?>" width='200' height='200' style="position:absolute;top:470px;left:1000px;visibility:visible"/>
</form>

<input type="image" onclick="nextImage();" src="next.jpg" style="position:absolute;left:1200px;top:540px;height:50px;width:50px"/>

<h2 style="position:absolute;left:300px;top:670px"> Mystery </h2>

<input type="image" class="close" onclick="previousImage();" src="previous.jpg" style="position:absolute;left:250px;top:810px;height:50px;width:50px" />
<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $myarray3[0]?>" />
    <input type="image" id="n" src="<?php echo "mystery/".$myarray3[0]?>" width='200' height='200' style="position:absolute;top:740px;left:300px;visibility:visible"/> 
</form>
<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $myarray3[1]?>" />
<input type="image" id="n" src="<?php echo "mystery/".$myarray3[1]?>" width='200' height='200' style="position:absolute;top:740px;left:520px;visibility:visible"/>
</form>
<form action="read_book.php"
<input type="hidden" name="src" value="<?php echo $myarray3[2]?>" />
<input type="image" id="n" src="<?php echo "mystery/".$myarray3[2]?>" width='200' height='200' style="position:absolute;top:740px;left:760px;visibility:visible"/>
</form>
<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $myarray3[3]?>" />
<input type="image" id="n" src="<?php echo "mystery/".$myarray3[3]?>" width='200' height='200' style="position:absolute;top:740px;left:1000px;visibility:visible"/>
</form>

<input type="image" onclick="nextImage();" src="next.jpg" style="position:absolute;left:1200px;top:810px;height:50px;width:50px"/>


<h2 style="position:absolute;left:300px;top:940px"> Fiction </h2>

<input type="image" class="close" onclick="previousImage();" src="previous.jpg" style="position:absolute;left:250px;top:1080px;height:50px;width:50px" />
<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $myarray4[0]?>" />
    <input type="image" id="n" src="<?php echo "fiction/".$myarray4[0]?>" width='200' height='200' style="position:absolute;top:1010px;left:300px;visibility:visible"/> 
</form>
<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $myarray4[1]?>" />
<input type="image" id="n" src="<?php echo "fiction/".$myarray4[1]?>" width='200' height='200' style="position:absolute;top:1010px;left:520px;visibility:visible"/>
</form>
<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $myarray4[2]?>" />
<input type="image" id="n" src="<?php echo "fiction/".$myarray4[2]?>" width='200' height='200' style="position:absolute;top:1010px;left:760px;visibility:visible"/>
</form>
<form action="read_book.php">
<input type="hidden" name="src" value="<?php echo $myarray4[3]?>" />
<input type="image" id="n" src="<?php echo "fiction/".$myarray4[3]?>" width='200' height='200' style="position:absolute;top:1010px;left:1000px;visibility:visible"/>
</form>

<input type="image" onclick="nextImage();" src="next.jpg" style="position:absolute;left:1200px;top:1080px;height:50px;width:50px"/>

</body>
</html>
