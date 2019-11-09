<?php
session_start();
if(isset($_SESSION['username']))
{
	$con=mysqli_connect("localhost","root","","ecommerce");
	$id=$_GET['id'];
	mysqli_query($con,"delete from cart where username='".$_SESSION['username']."' and id=$id");
	mysqli_close($con);
	header("Location:cart.php");
}
else{
	header("Location:hpage.php");
}
?>
