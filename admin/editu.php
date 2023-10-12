<?php
$con=mysqli_connect("localhost","root","","admin")
?>
<?php
$a=$_GET['a1'];
$b=$_GET['a2'];
$c=$_GET['a3'];
$d=$_GET['a4'];
$id=$_GET['a5'];
$x=mysqli_query($con,"update  user set Name='$a',Email='$b',Password='$c',Mobile='$d' where id='$id'");
if($x==1)
{
	header("location:user.php?msg=done");

}
else
{
	header("location:user.php?msg=notdone");
}
?>