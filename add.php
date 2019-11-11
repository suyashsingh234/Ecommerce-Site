<html>
	<body>
		<?php
			session_start();
			if(isset($_SESSION['username']))
			{
				$con=mysqli_connect("localhost","root","","ecommerce");
				foreach($_GET as $key => $value){
	  			$id=substr($key,2);
					if($value>0)
					{
						mysqli_query($con,"delete from cart where username='".$_SESSION['username']."' and id=$id");
						mysqli_query($con,"insert into cart values ('".$_SESSION['username']."',$id,$value)");
					}
				}
			  header("Location:cart.php");
			}
			else{
				header("Location:registration.php");
			}
		?>
	</body>
</html>
