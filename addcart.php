<?php
$con=mysqli_connect("localhost","root","","admin")
?>
<html>
<head>
<script>
function add()
{
	             
                var s = document.getElementById("text1");
				
     
			s.value++;
				var t=document.getElementById("price");
				var m=s.value*t.value;
				document.getElementById("total").value=m;
				
				
			
                
}
function minus()
{
	             
                var s = document.getElementById("text1");
				
     s.value--;
			
				var t=document.getElementById("price");
				var m=s.value*t.value;
				document.getElementById("total").value=m;
				
				
			
                
}


</script>
<style>
label:hover
{ height:10px;
width:auto;

color:#06F;
border-radius:5px;
}

input[type=text]
{
	border:none;
	background-color:transparent;
	color:balck;
}

button:hover
{
	height:30px;
	 width:80px;
	  background-color:yellow;
	   border: 1px solid white;
	   border-radius:10px;
	   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
div
{ height:20px;
width:100px;
background-color:#CCC;
border-radius:5px;
}
</style>
</head>
<body>
<?php
$id=$_GET['id'];
$x=mysqli_query($con,"select * from menu where id='$id'");
$t=mysqli_fetch_array($x);
?>
<center></center>
<hr></hr>
<fieldset>
<legend>Add Your Item In Mycart</legend>
<center><table  style="margin-right:10x; text-align:center;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);" bgcolor="#CCCCCC">
<tr><td style="height:30px; width:210px;"><b>Picture</b></td><td style="height:30px; width:180px;"><b>Item Name</b></td><td style="height:30px; width:180px;"><b>Unit Price</b></td><td style="height:30px; width:95px;"><b>Qty</b></td><td style="height:30px; width:164px;"><b>Subtotal</b></td><td style="height:30px; width:80px;"></td></tr></table></center>
<form action="addinst.php">
<center><table style="margin-right:1px;  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);" > 
<tr><td><img src="<?php echo $t['furl'];?>" height="200" width="200"><input type="hidden" value=" <?php $x=mysqli_query($con,"select * from menu where id='$id'"); ?> <?php echo $t['furl'];?> " name="a5"></td>
<td style="text-align:left; color:black;"><input type="text" value="<?php echo $t['name']; ?>" name="a1" readonly ></td>
<td style="text-align:left; color:black;">Rs.<input type="text" value="<?php echo $t['price']; ?>" name="a2" id="price" readonly></td>
<td style="color:black;"><div><label onClick="add()" >max</label><input style="height:20px; width:40px; text-align:center;color:black; background-color:white; border-radius:10px;" type="text" id="text1" value="1" name="a3" ><label onClick="minus()" >min</label></td><td  style="color:black;"></div><input type="text"  name="a4" id="total" readonly style="text-align:center;" value="<?php echo $t['price']; ?>"></td>
<td><button style="height:30px; width:80px;  border: none; box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">ADD</button></td></tr>
</table></center>
</fieldset>
</form>

</body>
</html>

	