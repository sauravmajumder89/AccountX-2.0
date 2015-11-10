<?php
session_start();

if(isset($_SESSION['usr']) && isset($_SESSION['pass']))
{
	$usr=$_SESSION['usr'];
	$pass=$_SESSION['pass'];
	
	include("dbinfo.inc.php");
	
	$sql="SELECT * FROM elec_admin WHERE username='$usr' and password='$pass'";
	$result=mysql_query($sql);


	$count=mysql_num_rows($result);

	if($count!=1)
	{
		header("location:index.php");	
	}
}
else
{
	header("location:index.php");	
}

?>
