<html>
	<body>
		<?php
			$con=mysqli_connect("localhost","root","","ecommerce");
			foreach($_GET as $key => $value){
  			$id=substr($key,2);
				if($value>0)
				{
					mysqli_query($con,"insert into cart values ($id,$value)");
				}
			}
		  header("Location:cart.php");
		?>
	</body>
</html>
