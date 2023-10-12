<?php
session_start();

include ('session_check.php');
?>
<?php
$con=mysqli_connect("localhost","root","","admin");
?>
<?php
print_r($_POST);
print_r($_FILES);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
#head
{
	width:auto;
	height:75px;
	background-color:#5E2BFF;
	border-radius:5px;
}
#side
{
	width:220px;
	height:1000px;
	background-color:#717B7F;
	float:left;
	border-bottom-left-radius:5px;
	border-top-left-radius:5px;
	
}
#th
{
height:75px;
width:auto;
background-color:#F2F3F7;
}
#side1
{
	wdith:750px;
	height:1000px;
	background-color:#CDD3CE;
	
}
a
{
	text-align: center; color:white;
	 font-size: 20px;
	 border-radius: 3px;
	 border: none;
	  height: 25px; 
	  width: 150px;
	  text-decoration:none;
}
body{
	background-color:#CDD3CE;
	font-family: Comic Sans MS, Monaco, monospace;
}
</style>
	<body>
    <div id="head">
	<center>	<h1 style="color:white; font-weight:bold; 
         font-family: Comic Sans MS, Monaco, monospace;">Menu</h1></center>
	</div>
    <div id="side">
    <table align="center">
    <tr><td style="border-radius:5px;  text-align:center; box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24); width:210px;"><img src="icon/home.png" align="center" alt="home" width="35" height="35">&nbsp; &nbsp;<a href="myaccount.php">My Account</a></br></br></td></tr>
    <tr><td style="border-radius:5px; text-align:center;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);"><img src="icon/comments.png" align="center" alt="home" width="35" height="35">&nbsp; &nbsp;<a href="#">Feedback&emsp;</a></br></br></td></tr>
    <tr><td style="border-radius:5px;text-align:center;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">&emsp;<img src="icon/rec.png" align="center" alt="home" width="35" height="35"> &nbsp;<a href="ro.php">Receive Order</a></br></br></td></tr>
    <tr><td style="border-radius:5px; text-align:center;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">&emsp;&emsp;<img src="icon/menu.png" align="center" alt="home" width="35" height="35">&emsp; &nbsp;<a href="categories.php" style="color:#0FF;">Menu&emsp;&emsp;&emsp;</a></br></br></td></tr>
    <tr><td style="border-radius:5px;text-align:center;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">&emsp;<img src="icon/user.png" align="center" alt="home" width="35" height="35"> &nbsp;<a href="user.php">&nbsp; &nbsp; Users&emsp;&emsp;</a></br></br></td></tr>
    <tr><td style="border-radius:5px; text-align:center;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);"><img src="icon/logout.png" align="center" alt="home" width="35" height="35">&nbsp; &nbsp;<a href="logout.php">Log Out&emsp; </a></br></br></td></tr>
    
    </table>
    </div>
    <div id="side1">
    <center><p>MENU</p></br>
    <form action="menuin.php">
    <table>
   <tr><td> NAME</td><td><input type="text" name="a1"></br></td></tr>
    <tr><td>SPECIFICATION</td><td><input type="text" name="a2"></br></td></tr>
     <tr><td>PRICE</td><td><input type="number" name="a3"></br></td></tr></table>
    <input type="submit" value="INSERT"></br></form>
    <form method="post" action="updimg.php" enctype="multipart/form-data">
       PICTURE<input type="file" name="a4"><input type="submit" value="AddPic"></br></form>
   
    </center>
    
    </form>
	<hr>
    <center> <p>MENUS DETAILS</p></center>
	</hr>
   <center> 
    <table border=".5" cellpadding="10">
    <?php

	$x=mysqli_query($con,"select * from menu");
	
	while($t=mysqli_fetch_array($x))
	{
	?>
		<tr><td><img src="<?php echo $t['furl'];?>" height="100" width="100"></td>
        <td>name:</br><?php echo $t['name'];?></td>
        <td>specification:</br><?php echo $t['spec'];?></td>
        <td>price:</br><?php echo $t['price'];?></td><td><a href="delm.php?id=<?php echo $t['id']; ?>"><button>DELETE</button></a></td><td><a href="edit.php?id=<?php echo $t['id']; ?>"><button>UPDATE</button></a></td></tr>
        
        <?php
        }
	?>
    </table></center>
    </div>
	<hr></hr>
    <footer><center style="color:black;">Design By Rohit</center><footer>
</body>
</html>