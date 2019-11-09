<html>
	<head>
		<link href="registration.css" rel="stylesheet">
	</head>
	<body>
		<?php
			session_start();
			if(isset($_SESSION['username']))
			{
				header("Location: hpage.php");
			}
			else{
		?>
		<div class="container">
			<div id="showLogin">
				Login
			</div>
			<div id="showSignup">
				Signup
			</div>
			<form id="login" action="login.php" method="POST">
				<div class="label">Username:</div>
				<input name="username" placeholder="Username"/>
				<div class="label">Password:</div>
				<input name="password" type="password" placeholder="Password"/>
				<br><br>
				<div>
				<input type="submit" name="loginbtn">
				</div>
			</form>
			<form id="signup" action="signup.php"  method="POST">
				<div class="label">Username:</div>
				<input name="username" placeholder="Username"/>
				<div class="label">Password:</div>
				<input name="password" type="password" placeholder="Password"/>
				<div class="label">Confirm password:</div>
				<input name="confirmpassword" type="password" placeholder="Password"/>
				<br><br>
				<div>
				<input type="submit" name="signupbtn">
				</div>
			</form>
		</div>
		<script src="registration.js"></script>
		<?php
			}
		?>
	</body>
</html>
