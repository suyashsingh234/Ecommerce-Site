<html>
	<link href="nav.css" rel="stylesheet">
	<body>
		<div class="nav">
			<div id="ls" class="btn">
				Log in/Sign up
			</div>
			<div id="cart">
				Cart
			</div>
			<div id="goHome">
				Home
			</div>
		</div>
		<table width="100%" border="2" style="font-size:2vw; text-align:center;">
			<?php
				$con=mysqli_connect("localhost","root","","ecommerce") or die("failed");
				$query=mysqli_query($con,"select cart.id, name, quantity from cart, items where cart.id=items.id");
				while($row=mysqli_fetch_assoc($query))
				{
					echo "<tr>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['quantity']."</td>";
					echo "<td>"."<a href='delete.php?id=".$row['id']."'>"."DELETE"."</td>";
					echo "</tr>";
				}
				mysqli_close($con);
			?>
		</table>
		<script src="item.js"></script>
	</body>
</html>
