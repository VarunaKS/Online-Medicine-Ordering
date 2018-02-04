<?php
if(isset($_POST["product"])){
session_start(); 
$_SESSION["prod"]=$_POST["product"];

	if(isset($_SESSION['prod'])){
	   $_SESSION['quan']=$_POST["q"];
   $conn=mysqli_connect("localhost","root","","prods");
   if(!$conn){
	   echo mysqli_connect_error();
	   echo "Error";
	  }
	  else{
		  
		  $query1="Select * from products";
	$res1=mysqli_query($conn,$query1);
	$count=mysqli_num_rows($res1);
	for($i=0;$i<$count;$i++){
	$row=mysqli_fetch_assoc($res1);
	if($row['name']==$_SESSION["prod"]){$price=$row["price"];break;}}
	$pro=($price)*($_SESSION["quan"]);
		  $name=$_SESSION['prod'];$quan=$_SESSION['quan'];
		$query3="INSERT INTO save VALUES('$name','$quan','$pro')";
		
		mysqli_query($conn,$query3);
}}}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="about.css" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
table td,th{
	border:1px solid #b35900;
	width:200px;
	height:50px;
	text-align:center;
}
td{ 
	width:200px;
	height:40px;
}
#ch{
	background-color:#66ff66;
	border-radius:5px;
	padding:5px;
	color:#145214;
	width:200px;
	height:50px;float:right;margin-right:100px;margin-top:30px;
}
#con{
	background-color:#ffd633;
	border-radius:5px;
	padding:5px;
	color:#ff6600;
	width:200px;
	height:50px;float:left;margin-left:100px;margin-top:30px;
}
td,th,#ch,#con{font-family: 'Open Sans', sans-serif;font-weight:bold;font-size:20px;}
</style>
</head>
<body>
<nav class="navbar">
<span class="open">
<a href="#" onclick="openslide()">
<svg width="30" height="30">
<path d="M0,5 30,5" stroke="#12908E" stroke-width="5"/>
<path d="M0,14 30,14" stroke="#12908E" stroke-width="5"/>
<path d="M0,23 30,23" stroke="#12908E" stroke-width="5"/></svg>
</a>
</span></nav>
<div id="sidebar" class="side">
<a href="#" class="close" onclick="closeslide()">&times;</a>
<a href="hh1.php">HOME</a>
<a href="about1.html">ABOUT</a>
<a href="contact.html">CONTACT US</a>
<a href="login.html">LOGIN/SIGNUP</a>
</div>
<div id="main">
<h1>CART</h1>
<center>
<?php 
 $conn=mysqli_connect("localhost","root","","prods");
$query="Select * from save";
	$res=mysqli_query($conn,$query);
	$count2=mysqli_num_rows($res);
	echo "<table style='border: 1px solid black'><tr><th>ITEM NAME</th><th>QUANTITY</th><th>PRICE</th></tr>";
	for($i=0;$i<$count2;$i++){
	$row1=mysqli_fetch_assoc($res);
	echo "<tr><td>".$row1['name']."</td><td>".$row1['quan']."</td><td>".$row1['price']."</td></tr>";
	}
	echo"</table>";
	
?>

</center>
<a href="order.php"><button id="con" >Continue Shopping</button></a>
<a href="final.php"  ><button id="ch" >Checkout</button></a>


<script>
function openslide(){
document.getElementById("sidebar").style.width="250px";
document.getElementById("main").style.marginLeft="250px";
}

function closeslide(){
document.getElementById('sidebar').style.width='0';
document.getElementById('main').style.marginLeft='0';
}

</script>
</body>
</html>