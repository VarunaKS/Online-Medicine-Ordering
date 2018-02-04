<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="about.css" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
#tr{height:200px;width:500px;border:2px solid #00e600 ;border-style:double;border-radius:10px;color:#33cc33;font-size:60px;padding:25px 25px;}
#tt{padding:10px;background-color:#ffcc00;color:#ff6600;margin-top:40px;width:300px;height:70px;border-radius:10px;font-size:25px;}
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
<?php  
$den=mysqli_connect("localhost","root","","order");
$conn=mysqli_connect("localhost","root","","prods");
   if(!$conn&&!$den){
	   echo mysqli_connect_error();
	   echo "Error";
	  }
	  else{
		$query = "Select * from save";
		$res = mysqli_query($conn,$query);
		$count = mysqli_num_rows($res);
		$un=$_SESSION['log'];
		for ($i=0;$i<$count;$i++)
		{
			$row = mysqli_fetch_assoc($res);
			$med=$row['name'];
			$q=$row['quan'];
			$p=$row['price'];
			$query3 ="INSERT INTO work VALUES('$un','$med','$q','$p')";
			mysqli_query($den,$query3);
		}
		$query1="DELETE FROM save";
		mysqli_query($conn,$query1);
	}
	?>
<div id="main">
<center>
<div id="tr">
ORDER<br/>PLACED
</div>
<a href="hh1.php"><button id="tt">Go Back To Home Page</button></a>
</center></div>
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
</html>