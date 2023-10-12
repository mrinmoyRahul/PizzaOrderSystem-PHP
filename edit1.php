<?php
$con=mysqli_connect("localhost","root","","admin")
?>
<?php
session_start();

include ('session_check.php');
?>
<?php
$a=$_GET['a1'];
$b=$_GET['a4'];
$c=$_GET['a2'];
$d=$_GET['a5'];
$id=$_GET['a3'];
$x=mysqli_query($con,"update  user set Name='$a',Email='$b',Password='$c',Mobile='$d' where id='$id'");
if($x==1)
{
	header("location:wcc.php?msg=done");

}
else
{
	header("location:wcc.php?msg=notdone");
}
?>