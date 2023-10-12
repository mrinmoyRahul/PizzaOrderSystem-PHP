<?php
$con=mysqli_connect("localhost","root","","admin");
?>
<?php
$a=$_GET['a1'];
$b=$_GET['a2'];
$c=$_GET['a3'];
$x=mysqli_query($con," Insert into menu(name,spec,price)values('$a','$b','$c')");
if($x==1)
{
	header("location:categories.php?msg=done");
}
else
{
	header("location:categories.php?msg=not done");
}
?>