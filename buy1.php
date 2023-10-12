<?php
$con=mysqli_connect("localhost","root","","admin")
?>

<?php
session_start();

include ('session_check.php');
?>
<html>
<body>
<?php
$a=$_GET['a1'];
$b=$_GET['a2'];
$c=$_GET['a3'];
$d=$_GET['a4'];
$e=$_GET['a5'];
$f=$_GET['a6'];
$g=$_GET['a7'];
$h=$_GET['a8'];
$i=$_GET['a9'];


$x=mysqli_query($con," Insert into recorder(username,mobile,address,landmark,pincode,,rquantity,rprice,rtprice)values('$a','$b','$c','$d','$e','$f','$g','$h','$i')");
if($x==1)
{
	header("location:home.php?msg=done");
}
else
{
	header("location:addcart.php?msg=not done");
}
?>

</body>
</html>