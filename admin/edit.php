<?php
$con=mysqli_connect("localhost","root","","admin")
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$id=$_GET['id'];
$x=mysqli_query($con,"select * from menu where id='$id'");

$t=mysqli_fetch_array($x);
?>
<form action="edit_code.php">
<input type="text" name="a1" value="<?php echo $t['name']; ?>">
<input type="text" name="a2" value="<?php echo $t['spec']; ?>">
<input type="text" name="a3" value="<?php echo $t['pic']; ?>">
<input type="text" name="a4" value="<?php echo $t['price']; ?>">
<input type="hidden" name="a5" value="<?php echo $t['id']; ?>">
<input type="submit" value="submit">
</form>


</body>
</html>