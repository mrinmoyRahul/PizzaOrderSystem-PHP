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
{ background-color: lightblue;
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
{background-color:white;
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
ol {background-color:#4abDAC;

	width: auto;
	height: 60px;
	border-radius: 10px;
	margin-left: 15px;
	}
ol li{background:#ffffff00; padding-top: 15px;

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
	color: black;
	text-decoration: none;
}
</style>
<body >
	<div id="s"></div>

<ol>
<li><a href="logout.php">Log Out</a></li>
<li><a href="contact.php">Contact Us</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="menu1.php">Menu</a></li>
<li><a href="wcc.php">My Account</a></li>
<li><a href="home.php">Home</a></li>
<li><a href="cart.php">My Cart</a></li>


</ol>


<div id="nd"> 
<p><center><strong > TODAYS MENU </strong></center></p>
    <hr></hr>
    <table >
    <tr >
    <td style="height:50px; width:490px; text-align:center;">Name</td>

    
    <td style="height:50px; width:390px;text-align:center;">Price</td>
    <td style="height:50px; width:390px;text-align:center;">Quantity</td>
    <td style="height:50px; width:295px;text-align:center;">Total</td>
    </tr></table>
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

        <td><a href="delc.php?id=<?php echo $t['id']; ?>"><button>Delete</button></a></td>
        </tr>
        <?php
	}
	?>
    </table></div>
</div>
<footer><center><a href="buy1.php"><button>Buy</button></a></center></footer>


<footer><center>Design By Rohit</center></footer>
</html>