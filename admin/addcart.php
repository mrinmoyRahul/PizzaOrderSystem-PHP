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
				
				document.getElementById("price").value=
				
				
			
                
}
function minus()
{
	  var textBox = document.getElementById("text1");
                textBox.value--;
}

</script>
</head>
<body>
<?php
$id=$_GET['id'];
$x=mysqli_query($con,"select * from menu where id='$id'");
$t=mysqli_fetch_array($x);

?>
<form>
<input type="text" name="a1" value="<?php echo $t['name']; ?>">
<input type="text" name="a2" value="<?php echo $t['spec']; ?>">
<input type="text" name="a3" value="<?php echo $t['pic']; ?>">
<input type="text" id="price" value="<?php echo $t['price']; ?>">
<input type="hidden" name="a5" value="<?php echo $t['id']; ?>">
<p id="price1"></p>
 </form>
values<button onClick="add()">add</button><input type="text" id="text1" value="1"><button onClick="minus()" >sub</button>
<label id="lab"></label>
</body>
</html>
	 
	 


	