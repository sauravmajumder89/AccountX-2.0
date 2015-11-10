<?php include("authenticate.inc.php"); ?>
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
<?php include("navbar.php"); ?>
<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="1020" id="AutoNumber2" height="412">
    <tr>
      <td height="412" width="1014" valign="top">
      
      <p align="center"></p>
      <div align="center">
        <center>
        <table border="0" cellpadding="10" cellspacing="10" style="border-collapse: collapse" bordercolor="#111111" width="990" id="AutoNumber3" height="225">
          <tr>
            <td valign="top" height="293" width="920">
             <div align="center">
               <center>
               <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="383" id="AutoNumber4" height="377">
                 <tr>
                   <td valign="top" width="383" height="377">
                   <p align="center"><font size="6" color="#C0C0C0">Reset 
                   Password</font></p>
                   <form method="POST" action="resetpass.php">

<?php

if(isset($_GET['stat']))
{
$var=$_GET['stat'];
}
else
{
$var=0;
}

if($var==1)
{
echo"<p align='center'><font color='green'>Password Successfully reseted.</font></p>";
}
elseif($var==2)
{
echo"<p align='center'><font color='red'>Password cannot be reseted.</font></p>";
}
?>


			<p align="center">
                     Existing Password : <input type="password" name="realpass" size="20"></p>
                     <p align="center">New Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                     : <input type="password" name="newpass" size="20"></p>
                     <p align="center">Confirm Password :
                     <input type="password" name="newpass_con" size="20"></p>
                     <p align="center">
                     <input type="submit" value="Submit" name="B1">
                     <input type="reset" value="Reset" name="B2"></p>
                   </form>
                   <p align="center">&nbsp;</p>
                   </td>
                 </tr>
               </table>
               </center>
             </div>
      
      </td>
    </tr>
  </table>
  </center>
</div>
<p align="left"><font size="2">&nbsp;&nbsp; Developed by Saurav Majumder</font></p>

</body>

</html>