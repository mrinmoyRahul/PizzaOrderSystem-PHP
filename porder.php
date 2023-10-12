<?php
$con=mysqli_connect("localhost","root","","admin")
?>
<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order Place</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="js/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<style>
#s{
	background-color:#ffffff00;
	height:75px;
	width:auto;
}
#nd
{background-color:;
height:1200;
width:800;
}
#th
{
font-family: "Times New Roman", Times, serif;
height:50px;
width:auto;
background-color:#262228;
}
#side
{
height:550px;
width:350px;
background-color:#FFCE00;
float:right;

}
#side2
{
height:550px;
width:400px;
background-color:#FFCE00;
}
#oll {background-color:#4abDAC;
	width: auto;
	height: 70px;
	border-radius: 10px;
	margin-left: 15px;
	}
oll li{background:#ffffff00; padding-top: 15px;

	width: 90px;
	height: 53px;
	padding-top: 15px;
	list-style-type: none;
	text-align: center;
	float:right;
	border-radius: 10px;
	margin-left: 20px;
    margin-top: 5px;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

oll li a{
	color: black;
	text-decoration: none;
}
</style>
<body style="background-image:url('img/1.jpg');background-size:cover;">
<div id="s">
<div id="s">

<oll>
<label style="color:white;">Welcome &nbsp;<?php echo$_SESSION['admin']['Name']?></label>
<li><center><a style="color:white;" href="logout.php">Log Out</a></center></li>
<li><center><a style="color:white;" href="about.php">About Us</a></center></li>

<li><center><a style="color:white;" href="wcc.php">My Account</a></center></li>
<li><center><a style="color:white;" href="cart.php">My Cart</a></center></li>
<li><center><a style="color:white;" href="menu1.php">Menu</a></center></li>

<li><center><a style="color:white;" href="home.php">Home</a></center></li>





</oll> </div></div>

<body>
<table border="3" bordercolor="olive">
    <?php

	$x=mysqli_query($con,"select * from cart");
	
	
	while($t=mysqli_fetch_array($x))
	{
	?>
    
		<tr>
        
       <td style="height:50px; width:500px;text-align:center;"> <?php echo $t['pname'];?></td>

        <td style="height:50px; width:400px;text-align:center;"><?php echo $t['pprice'];?></td>
       <td style="height:50px; width:400px;text-align:center;"> <?php echo $t['pquantity'];?></td>
              <td style="height:50px; width:400px;text-align:center;"> <?php echo $t['ptotal'];?></td>

      
        </tr>
        <?php
	}
	?>
    </table>
<form action="buy1.php">
name<input type="text" name="a1" value="<?php echo $_SESSION['admin']['Name']; ?>">
mobile<input type="text" name="a2" value="<?php echo $_SESSION['admin']['Mobile']; ?>">
Address<input type="text" name="a3" value="">
Landmark<input type="text" name="a4" value="">
Pincode<input type="text" name="a5" value="">
<input type="hidden" name="a6" value="<?php $x=mysqli_query($con,"select * from cart"); while($t=mysqli_fetch_array($x)){?> <?php echo $t['pname']; ?>,<?php } ?>">
<input type="hidden" name="a7" value="<?php $x=mysqli_query($con,"select * from cart");  while($t=mysqli_fetch_array($x)){?> <?php echo $t['pprice']; ?>,<?php } ?>">
<input type="hidden"name="a8" value="<?php $x=mysqli_query($con,"select * from cart");while($t=mysqli_fetch_array($x)){?> <?php echo $t['pquantity']; ?>,<?php } ?>">
<input type="hidden" name="a9" value="<?php while($t=mysqli_fetch_array($x)){?> <?php echo $t['ptotal']; ?>,<?php } ?>">
<input type="text" name"a10" value="<?php $s=mysqli_query($con,"select sum(ptotal) from cart"); 
while($k=mysqli_fetch_array($s))
{
	
?>
<?php echo $k['sum(ptotal)']; ?>
<?php
}
?>">
<a href="buy1.php"><button>confirm order</button></a>

</form>

    




</body>
</html>