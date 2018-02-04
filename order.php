<?php
	if(isset($_SESSION['log']))
		
		//header("Location:login.php");
	
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="about.css" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
<style>
.items{
background-color:#F98F45;color:white;border:1px solid #b35900;
padding:20px;
}
#res{
margin:20px;
}
#se{
height:30px;
width:200px;position:relative;top:-7px;
border-radius:1px;
}
#q{
float:right;
width:60px;margin-right:6px;
border-radius:10px;height:40px;position:relative;top:-5px;left:-150px;

}
#add{
float:right;
width:60px;
height:40px;
border-radius:10px;
background-color:#b3ffb3;
color:#009900;
padding:5px;position:absolute;left:1400px;
}

#ad{
float:right;
height:50px;
width:250px;border-radius:5px;
background-color:#b3ecff;
color:#00394d;position:relative;
top:-100px;
}
#ad,#se,#add{font-family:'Open Sans', sans-serif;font-weight:bold;font-size:20px;}
#q{position:relative;top:-35px;}
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
<h1>ORDER</h1>

<input id="se" type="text" placeholder="Search" name="sea"></input><a href="order.php#"><button id="s" style="padding:0;background-color:white;border-radius:5px;"onclick="search()"><img src="icon.jpeg" height="30px" width="30px"></button></a>
<form action="cart.php" method="POST">
<input type="submit" id="ad" value="PLACE ORDER"></input>
</form>
<div id="order">
<div id="1" class="items" >

ATEKIND-50
<form action="cart.php" method="POST">
<input type="submit" id="add" value="ADD" ></input>
<input type="number" id="q" min="1" max="10" step="1" placeholder="0" style="positon:relative;left:80px;" name="q"/>
<input type="hidden" name="product" value="ATEKIND-50"/></form>
</div>
<div id="2" class="items">
AMLOKIND-2.5
<form action="cart.php" method="POST">
<input type="submit" id="add" value="ADD" ></input>
<input type="number" id="q" min="1" max="10" step="1" placeholder="0"name="q" /><input type="hidden" name="product" value="AMLOKIND-2.5"/></form>
</div>
<div id="3" class="items">
BRUTACEF-O
<form action="cart.php" method="POST">
<input type="submit" id="add" value="ADD" ></input>
<input type="number" id="q" min="1" max="10" step="1" placeholder="0" name="q"/><input type="hidden" name="product" value="BRUTACEF-O"/></form>
</div>
<div id="4" class="items">
BANDY TABLETS
<form action="cart.php" method="POST">
<input type="submit" id="add" value="ADD" ></input>
<input type="number" id="q" min="1" max="10" step="1" placeholder="0" name="q"/><input type="hidden" name="product" value="BANDY TABLETS"/></form>
</div>
<div id="5" class="items">
CEFASTAR-250
<form action="cart.php" method="POST">
<input type="submit" id="add" value="ADD" ></input>
<input type="number" id="q" min="1" max="10" step="1" placeholder="0" name="q" /><input type="hidden" name="product" value="CEFASTAR-250"/></form>
</div>
<div id="6" class="items">
CIPROZOL - 500
<form action="cart.php" method="POST">
<input type="submit" id="add" value="ADD" ></input>
<input type="number" id="q" min="1" max="10" step="1" placeholder="0" name="q"/><input type="hidden" name="product" value="CIPROZOL - 500"/></form>
</div>
<div id="7" class="items">
CLARINOVA-250 
<form action="cart.php" method="POST">
<input type="submit" id="add" value="ADD" ></input>
<input type="number" id="q" min="1" max="10" step="1" placeholder="0" name="q"/><input type="hidden" name="product" value="CLARINOVA-250"/></form>
</div>
<div id="8" class="items">
FYNAL-250
<form action="cart.php" method="POST">
<input type="submit" id="add" value="ADD" ></input>
<input type="number" id="q" min="1" max="10" step="1" placeholder="0" name="q"/><input type="hidden" name="product" value="FYNAL-250"/></form>
</div>
<div id="9" class="items">
RABEKIND-30 
<form action="cart.php" method="POST">
<input type="submit" id="add" value="ADD" ></input>
<input type="number" id="q" min="1" max="10" step="1" placeholder="0" name="q"/><input type="hidden" name="product" value="RABEKIND-30"/></form>
</div>
<div id="10" class="items">
TELMIKIND-H
<form action="cart.php" method="POST">
<input type="submit" id="add" value="ADD" ></input>
<input type="number" id="q" min="1" max="10" step="1" placeholder="0" name="q"/><input type="hidden" name="product" value="TELMIKIND-H"/></form>
</div>
<div id="11" class="items">
ZINTAC
<form action="cart.php" method="POST">
<input type="submit" id="add" value="ADD" ></input>
<input type="number" id="q" min="1" max="10" step="1" placeholder="0" name="q"/><input type="hidden" name="product" value="ZINTAC"/></form>
</div>
</div></div>
<script>
function openslide(){
document.getElementById("sidebar").style.width="250px";
document.getElementById("main").style.marginLeft="250px";
}

function closeslide(){
document.getElementById('sidebar').style.width='0';
document.getElementById('main').style.marginLeft='0';
}
function search(){
var text=document.getElementById("se").value;
var arr=document.querySelectorAll(".items");var i=0;
for(i=0;i<arr.length;i++)
{
	console.log(arr[i].textContent.substr(0,2));console.log(text.substr(0,1));
var e=(arr[i].textContent.substr(0,2)===text.substr(0,1));console.log(e);
if(arr[i].textContent.substr(0,2)===text.substr(0,1)){
var n=arr[i].id;console.log(n);
location.assign("http://localhost/final/order.php#"+i);
break;
}
}
if(!n){
alert("Sorry We don't have it");

}
}

</script>

</body>
</html>