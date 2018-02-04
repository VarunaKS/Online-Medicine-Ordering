<?php
	session_start();
	$_SESSION['i']=0;
	if($_SESSION['i']!=0)
	{
	unset($_SESSION['log']);
	}
	else
	{
	$_SESSION['i']=1;
	}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Lato:700i" rel="stylesheet"> 
<link rel="stylesheet" href='hh1.css' type="text/css"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<script src="imgslide.js" type="text/javascript"></script>
<title>HEALING HANDS</title>
<style>
body{
margin:auto;

}
.grid{
	display:grid;
	max-width:100%;
	
	grid-template-columns:repeat(5,1fr);
	grid-auto-rows:minmax(200px,auto);
	text-align:center;
	
	
	position:relative;
	margin:10px 10px 10px 10px;
	
}
footer{margin:auto;font-family: 'Open Sans', sans-serif;font-weight:bold;font-size:20px;color:#ff9900;}
.grid div{
	background-color:#97CECC;//#ffcc99;	 //#ffb3b3;//#97CECC;//#F98F45;//#3bbced;
	margin:5px;font-family: 'Open Sans', sans-serif;font-weight:bold;font-size:40px;
padding:60px;color:#16594A//#ff8c1a;#C4421A ;
text-align:center;border:1px solid #16594A ;
grid-gap:20px;
}
#three{
grid-column:1/6;
grid-row:4/5;
margin:5px;
}
#one{
grid-column:1/6;
grid-row:1/2;
margin:5px;
}
span{
font-size:50px;}
#two{
background-color: #b8b894;
grid-column:1/3;
grid-row:2/4;font-size:20px;
}
#but{
width:100px;
height:40px;
float:right;
background-color:#97CECC;
color:white;
}
.social{float:left;}
.hear,.contact{float:right;}
.contact{position:relative;left:-370px;}
.social{position:relative;left:150px;}
.hear{position:relative;left:-100px;}
#foot{padding:50px;}

#two{
	background:url('fam3.jpeg') no-repeat;
	background-size:600px 400px;
	
}
#tew{
	background-color: #b8b894;
grid-column:3/4;
grid-row:2/4;font-size:20px;
}
#ow{
	background-color: #b8b894;
grid-column:4/6;
grid-row:2/4;font-size:20px;
background:url('conct1.jpeg') no-repeat;
	background-size:600px 400px;
	
}
#tew{	background-color:#97CECC;//#ffcc99;	 //#ffb3b3;//#97CECC;//#F98F45;//#3bbced;
	margin:5px;font-family: 'Open Sans', sans-serif;font-weight:bold;font-size:30px;
padding:60px;color:#16594A//#ff8c1a;#C4421A ;
text-align:center;border:1px solid #16594A ;}

</style>

</head>
<body>
<header>
<div class="container">
<img src="logo.jpg" alt="logo" class="logo" >
<nav>
<ul>
<li><a href="hh1.php">HOME</a></li>
<li><a href="about1.html">ABOUT US</a></li>
<li><a href="login.php">LOGIN</a></li>
<li><a href="contact.html">CONTACT US</a></li>
</ul>
</nav>
</div>

</header>

<center>
<div class="pimg1">

 </div>
 <section class="section1">
 <ul>
 <li><a href="account.php"><i class="fa fa-sign-in fa-3x" aria-hidden="true"></i></a></li>
<li><a href="order.php"><i class="fa fa-cart-plus fa-3x" aria-hidden="true"></i></a></li></ul>
</section>
</center>
<div class="grid">
<div id="one">Get a discount of <span>25%</span> on your first order</div>
<div id="two" >

</div>
<div id="tew">
We are here <br/>for you and <br/>your family.
</div>
<div id="ow"></div>

<div id="three">Medicines delivered within <span>one hour</span></div>
</div>

<footer class="f">
<div id="foot">
<div class="social"><h3>Connect With Us</h3><ul><li>Facebook</li><li>Twitter</li><li>Pinterest</li></ul></div>
<div class="hear"><h3>We'd love to hear from you</h3><ul><li>feedback</li></ul></div>
<div class="contact"><h3>We Are Here</h3><ul><li>Bangalore</li><li>Kolkata</li><li>Chennai</li><li>Mumbai</li></ul></div>

</div></footer>

</body>
</html>