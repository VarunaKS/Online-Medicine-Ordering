<?php
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
		$count = mysqli_num_rows($res);
		for ($i=0;$i<$count;$i++)
		{
			$row = mysqli_fetch_assoc($res);
			if($row['uname']==$uname )
			{
				if( $row['email']==$email)
				{
				printf("The Password Is: ");
				echo $row['pwd'];
				echo"<br/>";
				echo"<a href=\"login.php\">Back To Login ";
				echo"<br/>";
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
					echo"<br/>";
					echo"<a href=\"login.php\">Back To Login";
					echo"<br/>";
		}
		if($j==1)
		{
				$c =  "<p style = \"color:red\">Invalid User</p>";
				$d = "<a href = \"login.php\"> Try again </a>";
				echo $c;
				echo $d;
				echo"<br/>";
				echo"<a href=\"login.php\">Back To Login";
				echo"<br/>";
		}
	}
?>