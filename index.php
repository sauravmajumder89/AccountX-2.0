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
		header("location:homepage.php");	
	}
}

?>

<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Electrolink :: Customer Database</title>
</head>

<body topmargin="0" leftmargin="0">

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="1020" id="AutoNumber1" height="163" background="img/top_banner.gif">
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  </center>
</div>
<!-- ------------------------------Navbar position ------------------------------- -->
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="1020" id="AutoNumber2" height="412">
    <tr>
      <td height="412" width="414" valign="middle">
      <p align="center">
      <img border="0" src="img/people.jpg" width="420" height="368"></td>
      <td height="412" width="600">
      <div align="left">
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="417" id="AutoNumber3" height="256">
          <tr>
            <td height="256" width="417" valign="top">
            <p align="center"><font size="6" color="#CCCCCC">Administrator Login</font></p>
<?php

if(isset($_GET['err']) && $_GET['err']==1)
{
echo "<p align='center'><font color='red'>Wrong username/password.</font></p>";
}
?>
            <form method="POST" action="login_check.php">
              <p align="center">Username : <input type="text" name="username" size="20"></p>
              </p>
              <p align="center">Password :
              <input type="password" name="password" size="20"></p>
              <p align="center"><input type="submit" value="Submit" name="B1">
              <input type="reset" value="Reset" name="B2"></p>
            </form>
            <p align="center"><font size="2" color="#0000FF">Forgot Password</font></td>
          </tr>
        </table>
      </div>
      </td>
    </tr>
  </table>
  </center>
</div>
<p align="left"><font size="2">&nbsp;&nbsp; Developed by Saurav Majumder</font></p>

</body>

</html>