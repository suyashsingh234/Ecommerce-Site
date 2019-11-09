<?php
	session_start();
	if(isset($_POST['loginbtn']))
	{
		$uname=$_POST['username'];
		$password=$_POST['password'];
		$con=mysqli_connect("localhost","root","","ecommerce");

		$result=mysqli_query($con,"select username from users where username='$uname' and password='$password'");
		if(mysqli_num_rows($result)<=0)
		{
			header("Location: errors.php?message=Username+or+password+incorrect");
		}
		else{
			$_SESSION['username']=$uname;
			header("Location: hpage.php");
		}
		mysqli_close($con);
	}
	else{
		header("Location: registration.php");
	}
?>
