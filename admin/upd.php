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
$x=mysqli_query($con,"select * from adminis where id='$id'");

$t=mysqli_fetch_array($x);
?>
<form action="edita.php">
<input type="text" name="a1" value="<?php echo $t['username']; ?>">
<input type="text" name="a2" value="<?php echo $t['password']; ?>">

<input type="hidden" name="a3" value="<?php echo $t['id']; ?>">
<input type="submit" value="submit">
</form>


</body>
</html>