<?php
	session_start();
	extract($_GET);
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
		//$count = mysqli_num_rows($res);
		for ($i=0;$i< mysqli_num_rows($res);$i++)
		{
			$row = mysqli_fetch_assoc($res);
			if($row['uname']==$uname )
			{
				echo $uname;
				if( $row['pwd']==$pw)
				{
					echo $pw;
				$_SESSION['log']=$row['uname'];
				
				header("Location:order.php");
				exit;
				}
				else
				{
					$i=1;
				}
			}
			else
			{
				$j=1;
			}
		}
		if($i==1)
		{
			$a= "<p style = (\")color:red(\")>Wrong Password</p>";
					$b =  "<a href = \"login.php\"> Try again </a>";
					echo $a;
					echo $b;
		}
		if($j==1)
		{
			$f="login.php";
				$c =  "<p style = \"color:red\">Invalid User</p>";
				$d = "<a href = ".$f."> Try again </a>";
				echo $c;
				echo $d;
		}
	}
?>