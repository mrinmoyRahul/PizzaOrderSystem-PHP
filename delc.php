<?php
$con=mysqli_connect("localhost","root","","admin");
?>
<?php
$id=$_GET['id'];
$x=mysqli_query($con,"delete from cart where id='$id'");
if($x==1)
{
	header("location:mycart.php?msg=done");
}
else
{
	header("location:mycart.php?msg=not done");
}
?>