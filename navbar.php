<html>
<link href="nav.css" rel="stylesheet">
<body>
	<?php
	session_start();
	if(isset($_SESSION['username']))
	{
		?>
		<div id="nav">
			<div id="title">
				Jiit Shop
			</div>
			<div id="search">
				<input id="inpsearch" placeholder="search">
			</div>
			<div id="cart">
				My cart
			</div>
			<div id="logout">
			Log out
			</div>
		</div>
		<script src="nav.js"></script>
		<?php
	}
	else {
	?>
	<div id="nav">
		<div id="title">
			Jiit Shop
		</div>
		<div id="search">
			<input id="inpsearch" placeholder="search">
		</div>
		<div id="login">
			Log in
		</div>
	</div>
	<script src="nav2.js"></script>
	<?php
		}
	?>


</body>
</html>
