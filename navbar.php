<html>
<link href="nav.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
	<?php
	session_start();
	if(isset($_SESSION['username']))
	{
		?>
		<div id="nav">
			<div class="btn draw-border" id="title">
				Jiit Shop
			</div>
			<form id="search" action="search.php" method="POST">
				<input name="search" id="inpsearch" placeholder="search">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
			<div class="btn draw-border" id="cart">
				My cart
			</div>
			<div class="btn draw-border" id="logout">
			Log out
			</div>
		</div>
		<script src="nav.js"></script>
		<?php
	}
	else {
	?>
	<div id="nav">
		<div class="btn draw-border" id="title">
			Jiit Shop
		</div>
		<form id="search" action="search.php" method="POST">
			<input name="search" id="inpsearch" placeholder="search">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
		<div class="btn draw-border" id="login">
			Log in
		</div>
	</div>
	<script src="nav2.js"></script>
	<?php
		}
	?>


</body>
</html>
