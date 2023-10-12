<?php
$con=mysqli_connect("localhost","root","","admin");
session_start();
?>

<?php
$a=$_GET['a1'];
$b=$_GET['a2'];
$x=mysqli_query($con,"select * from adminis where username='$a' and password='$b'" );
$t=mysqli_fetch_array($x);
$_SESSION['admin']=$t;
if(mysqli_num_rows($x))

{
	header("location:dashboard.php?msg=done");
}
else
{
	header("location:index.php?msg= not done");
}
?>