<?php
$con=mysqli_connect("localhost","root","","admin")
?>
<html>
<head>
<title>
</title>
</head>
<style>
table
{ 
}
#font{
font-family: Arial, Helvetica, sans-serif;
}
#s{
	background-color:#4abDAC;
	height:75px;
	width:auto;
}
#ss{
	background-color:#4abDAC;
	height:150px;
	width:auto;
	border-radius: 10px;
	padding-top: 15px;

}
#nd
{
height:auto;
width:auto;}
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
ol {
position:fixed;
	width: 958px;
	height: 60px;
	border-radius: 10px;
	margin-left: -5px;
	display:list;
	margin-top:-65px;
	}
ol li{ padding-top: 15px;

	width: 100px;
	height: 35px;
	padding-top: 15px;
	list-style-type: none;
	text-align: center;
	float:right;
	border-radius: 10px;
	margin-left: 20px;
    margin-top: 5px;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

ol li a{
	color: white;
	text-decoration: none;
}
body
{
	background-image:url(img/pz2.jpg);
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-position:center;
	background-size:cover;
}

</style>
<body >
	

<ol>

<li><a href="contact.php">Contact Us</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="menu.php">Menu</a></li>
<li><a href="login.html">Login/Register</a></li>
<li><a href="index.html">Home</a></li>

</ol>


<div id="nd"> 
<p style="margin-top:65px;"><center ><strong style="color:white;" > TODAYS MENU </strong></center></p>
    <hr></hr>
   <center> <table style="margin-top:40px; color:white;" >
    <?php

	$x=mysqli_query($con,"select * from menu");
	
	while($t=mysqli_fetch_array($x))
	{
	?>
   
		<tr style>
        <th rowspan="4"><img src="<?php echo $t['furl'];?>" height="200" width="200"></th>
<th colspan="4">name</br><?php echo $t['name'];?></th></tr>
       <tr> <th colspan="4" >specification</br><?php echo $t['spec'];?></th></tr>
       <tr><th colspan="3"> price</br>Rs.<?php echo $t['price'];?>.00</th></tr><th colspan=><a href="login.php"><button>ADDCART</button></a></th></tr>
        <?php
	}
	?>
   </table></center></div>
     
</div>

<footer><center>Design By Rohit</center></footer>
</html>