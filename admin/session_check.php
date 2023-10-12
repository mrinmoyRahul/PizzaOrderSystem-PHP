<?php
if(isset($_SESSION['admin'])=='')
{
	header("location:index.html?msg=enter email and password");	
}
?>