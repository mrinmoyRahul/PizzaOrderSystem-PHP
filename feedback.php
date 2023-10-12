<?php
$con=mysqli_connect("localhost","root","","admin");

?>

<?php
$a=$_GET['a1'];
$b=$_GET['a2'];
$c=$_GET['a3'];
$d=$_GET['a4'];

$x=mysqli_query($con,"select * from feedback where name='$a' and email='$b' and country='$c' and message='$d' ");
$t=mysqli_fetch_array($x);
if(mysqli_num_rows($x))
{
	header("location:home.php?msg=done");
	
}
else
{
	
}
?>