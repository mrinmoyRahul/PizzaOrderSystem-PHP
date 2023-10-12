<?php
$con=mysqli_connect("localhost","root","","admin");
?>
<?php
$id=$_GET['id'];
$x=mysqli_query($con,"delete from menu where id='$id'");
if($x==1)
{
	header("location:categories.php?msg=done");
}
else
{
	header("location:categories.php?msg=not done");
}
?>