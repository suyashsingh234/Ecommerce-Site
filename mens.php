<html>
	<head>
		<link href="mens.css" rel="stylesheet"/>
	</head>
	<body>
		<div class="nav">
			<div id="ls" class="btn">
				Log in/Sign up
			</div>
			<div id="title" >
					JIIT SHOP
				</div>
			<div id="goHome">
				Home
			</div>
		</div>
		<?php
			$con=mysqli_connect("localhost","root","","ecommerce") or die("failed");
			$result=mysqli_query($con,"select * from items where type='men'");
			echo "<div class='items'>";
			while($row=mysqli_fetch_assoc($result))
			{
				echo "<div class='ItemType'>".$row['name']."<div>
					<button class='minus'>-</button>
					<div id=".$row['id']." class='count'>0</div>
					<button class='plus'>+</button>
				</div>
			</div>"."<br>";
			}
			echo "</div>";
		?>
		<button id="addcart" class="addtocart">Add to cart</button>
		<script src="mens.js"></script>
	</body>
</html>
