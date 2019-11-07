<?php
$con=mysqli_connect("localhost","root","","ecommerce");
$id=$_GET['id'];
mysqli_query($con,"delete from cart where id=$id");
mysqli_close($con);
header("Location:cart.php");
?>
