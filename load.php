<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href='load.css' type="text/css"/>
<style>
body{
background-color:#00ccff;}
</style>

</head>
<body>
<div id="loader11">
<div id="loader1">
<div id="loader2">
<div id="loader"></div>
</div>
</div></div>
<script>

(function(){
var preload=document.getElementById("loader11");
var load=0;
var id=setInterval(frame,64);
function frame(){
if(load==100)
{
   clearInterval(id);
   window.open("hh1.php","_self");
   
  }
  else
  {load=load+1;
  if(load==90){
  preload.style.animation="fadeout 1s ease";}
  }}}
)();

  
</script>
</body>
</html>

<?php
session_start();
$_SESSION['i']=0;
?>