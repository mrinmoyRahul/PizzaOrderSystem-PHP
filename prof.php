<?php
$con=mysqli_connect("localhost","root","","admin")
?>
<html>
<head>

<?php
$id=$_GET['id'];
$x=mysqli_query($con,"select * from user where id='$id'");
$t=mysqli_fetch_array($x);

?>
<form action>

name: <?php echo $t['spec']; ?>

</form>


 

</body>
</html>