<!DOCTYPE html>
<html>
<head>
	<title> Register </title>
	<link rel="stylesheet" href="login.css" type="text/css">
	<link rel="stylesheet" href="about.css" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
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
<a href="hh1.html">HOME</a>
<a href="about1.html">ABOUT</a>
<a href="contact.html">CONTACT US</a>
<a href="login.html">LOGIN/SIGNUP</a>
</div><center>
<div id="main">
<h1 style="font-size:75px; font-family:Sans-serif; color:#000099"> Register with us</h1></center>
<div class="haha">
<div id="div">
	<form action="reg.php" method="GET">
	<label> UserName</label><br/>
	<input  type="text" placeholder="Enter User Name" name="uname"/><br/>
	<br/>

	<label> E-mail</label><br/>
	<input  type="email" placeholder="Enter E-mail" name="email"/><br/>
	<br/>
	<label> Phone Number</label><br/>
	<input  type="text" placeholder="Enter Phone Number" name="ph"/><br/>
	<br/>
	<label> Address</label><br/>
	<textarea name= "address" rows="4" cols="160"></textarea><br/>
	<br/>
	<label> Password</label><br/>
	<input  id ="p1" type="text" placeholder="Enter Password" name="pwd"/><br/>
	<br/>
	
	<label> Confirm Password</label><br/>
	<input id ="p2" type="text" placeholder="Confirm Password" name="cpwd"/><br/>
	<br/>
	
	<button id="sub" type="submit" >Submit</button>
	
	
	<div id="div" style="background-color:#f1f1f1">
	<a href="hh1.php" style="text-decoration:none;" ><button type="button" class="cancelbtn"style="background-color:#94b8b8">Cancel</button></a>
	 
</div>
</div></div>
</form>


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
