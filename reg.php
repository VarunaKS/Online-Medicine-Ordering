<?php
extract($_GET);

session_start();
if((strcmp($pwd,$cpwd)==0))
{
$conn=mysqli_connect("localhost","root","","test");
if($conn)
{
$query ="Insert into user(uname,email,phno,address,pwd) VALUES('$uname','$email','$ph','$address','$pwd') ";
mysqli_query($conn,$query);
echo "User Created";
}
}
else
{
$msg="The password you have confirmed does not match what you have entered";
echo $msg;
echo"<br/>";
echo"RETRY";
include("reg.html");
}

?>
