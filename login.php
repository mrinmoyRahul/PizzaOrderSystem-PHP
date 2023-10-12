<?php
$con=mysqli_connect("localhost","root","","admin");
session_start();
?>

<?php
$a=$_GET['a1'];
$b=$_GET['a2'];

$x=mysqli_query($con,"select * from user where Email='$a' and Password='$b' ");
$t=mysqli_fetch_array($x);
$_SESSION['admin']=$t;
if(mysqli_num_rows($x))
{
	header("location:home.php?msg=done");
}
else
{
	header("location:login.html?msg=not done");
}
?>