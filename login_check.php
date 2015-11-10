<?php

include("dbinfo.inc.php");

$usrname=$_POST['username'];
$pass=$_POST['password'];
$encrypt_password=md5($pass);

$sql="SELECT * FROM elec_admin WHERE username='$usrname' and password='$encrypt_password'";
$result=mysql_query($sql);


$count=mysql_num_rows($result);

mysql_close();

if($count==1)
{
	session_start();
	$_SESSION['usr']=$usrname;
	$_SESSION['pass']=$encrypt_password;
	header("location:homepage.php");
}
else
{
	header("location:index.php?err=1");
;
}

?>
