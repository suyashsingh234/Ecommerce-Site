<?php
	session_start();
	if(isset($_POST['signupbtn']))
	{
		$uname=$_POST['username'];
		$password=$_POST['password'];
		$confirmpass=$_POST['confirmpassword'];
		if($password!=$confirmpass)
			header("Location: errors.php?message=Passwords+don't+match");
		else if(strlen($password)==0 || strlen($uname)==0)
			header("Location: errors.php?message=Password+or+username+length+short");
		else {
			$con=mysqli_connect("localhost","root","","ecommerce");
			$result=mysqli_query($con,"select username from users where username='$uname'");
			if(mysqli_num_rows($result)>0)
			{
				header("Location: errors.php?message=Username+already+exists");
			}
			else{
				$query=mysqli_query($con,"insert into users values ('$uname','$password')");
				if(!$query)
					header("Location: errors.php?message=account+creation+failed");
				else {
						 $_SESSION['username']=$uname;
						 header("Location: hpage.php");
				}
			}
			mysqli_close($con);
		}
		}
		else{
			header("Location: registration.php");
		}
?>
