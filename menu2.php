<?php
$con=mysqli_connect("localhost","root","","admin")
?>
<?php
session_start();

include ('session_check.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Menu</title>
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
<li><a style="color:white;" href="logout.php">Log Out</a></center></li>
<li><a style="color:white;" href="contact.php">Contact Us</a></center></li>

<li><a style="color:white;" href="about.php">About Us</a></center></li>

<li><a style="color:white;" href="wcc.php">My Account</a></center></li>
<li><a style="color:white;" href="cart.php">My Cart</a></center></li>
<li><a style="color:white;" href="menu1.php">Menu</a></center></li>

<li><a style="color:white;" href="home.php">Home</a></center></li>





</oll> </div></div>


<div id="nd"> 
<p><center><strong > TODAYS MENU </strong></center></p>
    <hr></hr>
    <table >
    <tr >
    <td style="height:50px; width:490px; text-align:center;">Name</td>

    
    <td style="height:50px; width:390px;text-align:center;">Ingredients</td>
    <td style="height:50px; width:390px;text-align:center;">Price</td>
    <td style="height:50px; width:295px;text-align:center;">AddCart</td>
    </tr></table>
    <table border="3" bordercolor="olive">
    <?php

	$x=mysqli_query($con,"select * from menu");
	
	while($t=mysqli_fetch_array($x))
	{
	?>
    
		<tr>
        
       <td style="height:50px; width:500px;text-align:center;"> <?php echo $t['name'];?></td>

        <td style="height:50px; width:400px;text-align:center;"><?php echo $t['spec'];?></td>
       <td style="height:50px; width:400px;text-align:center;"> <?php echo $t['price'];?></td>
        <td style="height:50px; width:300px;text-align:center;"><a href="addcart.php?id=<?php echo $t['id']; ?>"><button>ADDCART</button></a></td>
        </tr>
        <?php
	}
	?>
    </table></div>
</div>

<footer><center>Design By Rohit</center></footer>
</html>