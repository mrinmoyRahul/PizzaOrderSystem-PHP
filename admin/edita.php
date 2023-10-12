<?php
$con=mysqli_connect("localhost","root","","admin")
?>
<?php
$a=$_GET['a1'];
$b=$_GET['a2'];
$id=$_GET['a3'];

$x=mysqli_query($con,"update adminis set username='$a',password='$b' where id='$id'");
if($x==1)
{
	header("location:myaccount.php?msg=done");

}
else
{
	header("location:myaccount.php?msg=notdone");
}
?>