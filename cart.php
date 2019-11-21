<html>
	<head>
		<link href="cart.css" rel="stylesheet">
	</head>
	<body>
		<?php
		include "navbar.php";
		if(isset($_SESSION['username']))
		{
		?>
		<table>
			<?php
				$con=mysqli_connect("localhost","root","","ecommerce") or die("failed");
				$query=mysqli_query($con,"select cart.id, name, quantity, price from cart, items where cart.id=items.id");
				while($row=mysqli_fetch_assoc($query))
				{
					echo "<tr>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['quantity']."</td>";
					echo "<td>Rs ".$row['quantity']*$row['price']."</td>";
					echo "<td>"."<a href='delete.php?id=".$row['id']."'>"."DELETE"."</td>";
					echo "</tr>";
				}
				mysqli_close($con);
			?>
		</table>
	<?php }else{
		header("Location:registration.php");
	}?>
	</body>
</html>
