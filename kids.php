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
				echo "<div class='item'>
					<div class='left'>
					<img src='images/".$row['imgname']."'></img>
					</div>
					<div class='right'>
						<div class='title'>".
							$row['name']
							."
						</div>
						<div class='price'>
							Rs ".$row['price']
							."
						</div>
						<div class='bottom'>
							<button class='minus'>-</button>
							<div id=".$row['id']." class='count'>0</div>
							<button class='plus'>+</button>
						</div>
					</div>
				</div>";

			}
			echo "</div>";
			mysqli_close($con);
		?>
		<button id="addcart" class="button">Add to cart</button>
		<script src="item.js"></script>
	</body>
</html>
