<?php
$con=mysqli_connect("localhost","root","","admin")
?>
<?php
session_start();

include ('session_check.php');
?>
<html>
<head>
  <title>Update Account</title>
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
<li><center><a style="color:white;" href="contact.php">Contact Us</a></center></li>

<li><center><a style="color:white;" href="about.php">About Us</a></center></li>

<li><center><a style="color:white;" href="wcc.php">My Account</a></center></li>
<li><center><a style="color:white;" href="cart.php">My Cart</a></center></li>
<li><center><a style="color:white;" href="menu1.php">Menu</a></center></li>
<li><center><a style="color:white;" href="home.php">Home</a></center></li>





</oll> </div></div>
<body>
<?php
$id=$_GET['id'];
$x=mysqli_query($con,"select * from user where id='$id'");

$t=mysqli_fetch_array($x);
?>
<form action="edit1.php">

<center><ol>
<li><input type="text" name="a1" value="<?php echo $t['Name']; ?>"></li>
<li><input type="text" name="a2" value="<?php echo $t['Password']; ?>"></li>
<li><input type="text" name="a4" value="<?php echo $t['Email']; ?>"></li>
<li><input type="text" name="a5" value="<?php echo $t['Mobile']; ?>"></li>

<input type="hidden" name="a3" value="<?php echo $t['id']; ?>">
<input type="submit" value="submit">
</ol>
</form>
</center>


</body>
</html>