<?php
session_start();
$con = mysqli_connect("localhost","root","","hh");
	if(!$con)
	{
		echo mysqli_connect_error();
		echo "Connection Failed Please Try Again After Switching On Server";
	}
	else
	{
		$query = "Select * from user";
		$res = mysqli_query($con,$query);
	} ?>
		
		
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="about.css" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
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
<h1>ACCOUNT</h1>
<div id="name">
<form action="logout.php" method="GET">
<input type="submit"value="LOG OUT">
</form>
<?php
if(isset($_SESSION['log'])){
$count = mysqli_num_rows($res);
		$un=$_SESSION['log'];
		for ($i=0;$i<$count;$i++)
		{$row = mysqli_fetch_assoc($res);
	if($row['uname']==$un){
	break;}
		}
		
			
echo "USER NAME:";echo "$row[uname]"; echo "<br/>";
echo "EMAIL ID:";echo "$row[email]"; echo "<br/>";
echo "ADDRESS:" ;echo "$row[address]"; echo "<br/>";
echo "PH NO.";echo "$row[phno]"; echo "<br/>";
}
else header("Location:login.php");
?>
<script>
function openslide(){
document.getElementById("sidebar").style.width="250px";
document.getElementById("main").style.marginLeft="250px";
}

function closeslide(){
document.getElementById('sidebar').style.width='0';
document.getElementById('main').style.marginLeft='0';
}
</script></body></html>