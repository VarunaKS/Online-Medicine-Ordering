<?php
	
	
	extract($_GET);
	echo $place;
	if($place=="LOCATIONS IN BANGALORE")
	{
		echo"<br/>";
		
		echo"CHANDRALAYOUT";echo"</span>";
		echo"<br/>";
		echo"MARATHAHALLI";echo"</span>";
		echo"<br/>";
		
		echo"VIJAYANAGAR";echo"</span>";echo "<br/>";
	}
	if($place=="LOCATIONS IN CHENNAI")
	{
		echo"<br/>";
		echo"<span>";
		echo"BESANTNAGAR";echo"</span>";
		echo"<br/>";
		echo"<span>";
		echo"PALAVAKKAM";echo"</span>";
		echo"<br/>";
		echo"<span>";
		echo"ANNA NAGAR";echo"</span>";echo "<br/>";
	}
	if($place=="LOCATIONS IN BOMBAY")
	{
		echo"<br/>";
		echo"<span>";
		echo"BANDRA";echo"</span>";
		echo"<br/>";
		echo"<span>";
		echo"ANDHERI";echo"</span>";
		echo"<br/>";
		echo"<span>";
		echo"POWAI";echo"</span>";echo "<br/>";
	}
	if($place=="LOCATIONS IN KOLKATA")
	{
		echo"<br/>";
		echo"<span>";
		echo"NABANNA";echo"</span>";
		echo"<br/>";
		echo"<span>";
		echo"LINDSAY ST";echo"</span>";
		echo"<br/>";
		echo"<span>";
		echo"BELEGHATA";echo"</span>";echo "<br/>";
		
	}
?>
<html>
<head>
<style>body{font-family: 'Open Sans', sans-serif;font-weight:bold;font-size:30px;
	background-color:#ffcc99;
	color:#C4421A;}
	#s{padding:5px;background-color:#6699cc;font-family: 'Open Sans', sans-serif;font-weight:bold;font-size:20px;color:#0000ff;}span{
	color:#6699cc;font-size:25px;}</style>
</head>
<body>
<form method="GET" action="contact.html">
<br/>
<br/><br/>
<input id="s" type="submit" value="RETURN BACK TO MAIN PAGE"/>
</form>
</body>
</html>