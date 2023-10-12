<?php
$con=mysqli_connect("localhost","root","","admin");
?>
<?php
$a=$_GET['a1'];
$b=$_GET['a2'];
$c=$_GET['a3'];
$d=$_GET['a4'];
$f=$_GET['a5'];
$x=mysqli_query($con," Insert into cart(pname,pprice,pquantity,ptotal,purl)values('$a','$b','$c','$d','$f')");
if($x==1)
{
	header("location:mycart.php?msg=done");
}
else
{
	header("msg=not done");
}
?>
