<?php
$con=mysqli_connect("localhost","root","","admin");
?>
<?php
$id=$_GET['id'];
$x=mysqli_query($con,"delete from recorder where id='$id'");
if($x==1)
{
	header("location:ro.php?msg=done");
}
else
{
	header("location:ro.php?msg=not done");
}
?>