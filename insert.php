<?php
$con=mysqli_connect("localhost","root","","admin");
?>
<?php
$a=$_GET['a1'];
$b=$_GET['a2'];
$c=$_GET['a3'];
$d=$_GET['a4'];
$x=mysqli_query($con," Insert into user(Name,Email,Password,Mobile)values('$a','$b','$c','$d')");
if($x==1)
{
	header("location:index.html?msg=done");
}
else
{
	header("location:index.html?msg=not done");
}
?>