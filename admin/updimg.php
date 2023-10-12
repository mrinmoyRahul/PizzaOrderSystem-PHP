<?php
$con=mysqli_connect("localhost","root","","admin");
session_start();
?>

<?php
$fname=$_FILES['a4']['name'];
$url="img/";
$furl=$url.$fname;
move_uploaded_file($_FILES['a4']['tmp_name'],$furl);
$x=mysqli_query($con,"update menu set fname='$fname',furl='$furl' where fname=''");
if($x==1)
{
	header("location:categories.php?msg=done");
}
else
{
	header("location:categories.php?msg=not done");
}
?>