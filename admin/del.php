<?php
$con=mysqli_connect("localhost","root","","admin");
?>
<?php
$id=$_GET['id'];
$x=mysqli_query($con,"delete from user where id='$id'");
if($x==1)
{
	header("location:user.php?msg=done");
}
else
{
	header("location:user.php?msg=not done");
}
?>