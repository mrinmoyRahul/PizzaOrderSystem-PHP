<?php
$con=mysqli_connect("localhost","root","","admin")
?>
<?php
session_start();

include ('session_check.php');
?>
<html>
<head>
  <title>Contact Us </title>
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
<div="body">
<hr></hr>
<br>

<center>  <form action="feedback.php">
<table>
<tr>
   <td> <label for="fname" style=color:white;">Name</label>
    <input type="text" id="fname" name="a1" placeholder="Your name.."></td>

    <td><label for="lname" style=color:white;">Email</label>
    <input type="Email" id="lname" name="a2" placeholder="Your Email.."></td>

   <td> <label for="country " style=color:white;">Country</label>
    <select id="country" name="a3">
	<option value="india">India</option>
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select></td></tr><table>
<center>	

    <label for="subject" style=color:white;"></label>
    <textarea id="subject" name="a4" placeholder="Write something.." style="height:200px"></textarea><br>

   <input type="submit" value="Submit"></li></td> </center>


  </form></center>
  
</div>

</body>
</html>
