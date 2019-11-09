<html>
	<head>
		<link href="item.css" rel="stylesheet"/>
	</head>
	<body>
		<?php
			include "navbar.php";
		?>
		<?php
			$con=mysqli_connect("localhost","root","","ecommerce") or die("failed");
			$result=mysqli_query($con,"select * from items where type='kids'");
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
			mysqli_close($con);
		?>
		<button id="addcart" class="addtocart">Add to cart</button>
		<script src="hpage.js"></script>
	</body>
</html>
