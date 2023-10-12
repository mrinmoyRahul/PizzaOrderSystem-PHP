<?php
$con=mysqli_connect("localhost","root","","admin")
?>
<html>
<head>
<style>
body
{
	background-image:url(img/pz4.jpg);
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:center;}
input[type=text]
{
	border:none;
	background-color:transparent;
	color:white;
}
b
{ color:white;}
td
{
	width:200px;
}
</style>
</head>
<body>
<?php
$x=mysqli_query($con,"select * from cart");
while($t=mysqli_fetch_array($x))
{
	?>
    <fieldset style="border: 1px solid white;">
    <legend><b style="color:white;">Your Item</b></legend>
<form >
<center><table style="margin-right:1px;"  > 
<tr><td><img src="<?php echo $t['purl'];?>" height="200" width="200" ></td>
<td><label><b>ITEM</br><?php echo $t['pname']; ?></b></label></td><td><label><b>PRICE </br>Rs.<?php echo $t['pprice']; ?></b></td>
<td><label><b>QUANTITY</br><?php echo $t['pquantity']; ?></b></td><td ><label><b>SUBTOTAL</br>Rs.<?php echo $t['ptotal']; ?></b></td>
<td><button style="height:30px; width:80px;  border: 1px solid white; background-color:#06F; "><b><a href="delc.php?id=<?php echo $t['id'];?>">Cancel</b></button></td></tr>
</table></center>
<hr></hr><button style="margin-left:1400px; height:40; width:100px; background-color:#06F;border: 1px solid white; margin-top:-5px; "><b>Update</b></button></fieldset>
</form>
<?php
}
?>
<div style="margin-top:600;"> 
<button style="height:60; width:760; background-color:#06F; border:none;margin-left:2px; background-color:#C30;"><b><h1><a href="menu1.php">Continue Shopping</a></h1></b></button><button style=" height:60; width:800; background-color:#06F; border:none; background-color:#0C0; "><b><h1><a href="porder.php">Place Order</a></h1></b></button></div>
</body>
</html>