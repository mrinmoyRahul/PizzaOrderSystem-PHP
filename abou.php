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
  <title>About Us</title>
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
<h1 style="color:white">About Us:</h1>

<br>
<h3 style="color:#C60">
<p>There’s nothing cookie-cutter about Pizza-Di-Vinci. Not our pizzas. Not our people. And definitely not the way we live life. Around here, we don’t settle for anything less than food we’re proud to serve. And we don’t just clock in. Not when we can also become our best, make friends, and have fun while we’re at it. We’re the pizza company that lives life unboxed. We’re not for people who want to blend in: pushing boundaries is part of our heritage. </p>

<p>At Pizza-Di-Vinci , we don’t just make pizza. We make people happy. Pizza-Di-Vinci  was built on the belief that pizza night should be special, and we carry that belief into everything we do. With more than 55 years of experience under our belts, we understand how to best serve our customers through tried and true service principles: We create food we’re proud to serve and deliver it fast, with a smile.</p>
</h3>
</div>
</body>
</html>