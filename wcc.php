<?php
session_start();

include ('session_check.php');
?>
<?php
$con=mysqli_connect("localhost","root","","admin")
?>
<html>
<head>
<head>
  <title>My Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="js/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<style>
td{
  border-spacing: 5em;
}
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
<p ><center style="color:white;"> ACCOUNT DETAILS</center></p>
    <hr></hr>
    <?php
    $k=$_SESSION['admin']['Name'];
	$x=mysqli_query($con,"select * from user where Name='$k'");
	
	while($t=mysqli_fetch_array($x))
	{
	?>
		<center><table>
		<tr>
        
	<td><div id="fa"><center><p style="color:white;">&nbsp;&nbsp;  &nbsp; ID&nbsp; &nbsp; &emsp;&emsp;&emsp;&emsp;</td>  
       <td><div><p style="color:white;"> &nbsp; USERNAME&nbsp;  &emsp;&emsp;</td>
       <td><div><p style="color:white;">&emsp;&emsp;PASSWORD&nbsp; &emsp; &nbsp; &emsp;</td>
       <td><div><p style="color:white;">&emsp;&emsp;EMAIL&nbsp; &emsp; &emsp;&emsp;</td>
       <td><div><p style="color:white;">&nbsp; &nbsp; &nbsp; &emsp;&emsp;&nbsp; MOBILE&nbsp; &emsp; &emsp;&emsp;<td>
	   </tr>
	   </center>
	  <center> 
	   <td style="color:white;"> &nbsp; &emsp;<?php echo $t['id'];?> &emsp; &emsp; &nbsp; </p></center></div></td>
	   <td style="color:white;">&emsp;<?php echo $t['Name'];?>&nbsp; &nbsp; &emsp; &emsp;</p></center></div></td>
	   <td style="color:white;">&emsp;&emsp;<?php echo $t['Password'];?> &emsp;</p></center></div></td>
	   <td style="color:white;">&emsp;<?php echo $t['Email'];?> &emsp;</p></center></div></td>
	  <td style="color:white;">&emsp; &emsp;&emsp;<?php echo $t['Mobile'];?> &emsp;</p></center></div></td>
	   
	   </table></center>

        
        <div><center>  <a href="upd1.php?id=<?php echo $_SESSION['admin']['id']; ?>"><button>UPDATE</button></a></center></div>
        
        <?php
        }
	?>
</body>
</html>


 
