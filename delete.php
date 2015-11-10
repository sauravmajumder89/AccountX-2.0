<?php include("authenticate.inc.php"); ?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Electrolink :: Customer Database</title>

</head>

<body topmargin="0" leftmargin="0">

<?php

$cuid=$_GET['custid'];
$card=$_GET['card'];
$name=$_GET['name'];

?>

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
        <table border="0" cellpadding="10" cellspacing="10" style="border-collapse: collapse" bordercolor="#111111" width="990" id="AutoNumber3" height="273">
          <tr>
            <td valign="top" height="341" width="920">
             <div align="center">
               <center>
               <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="383" id="AutoNumber4" height="377">
                 <tr>
                   
			<td valign="top" width="383" height="377">
                   <p align="center"><font size="6" color="#C0C0C0">Delete 
                   Customer</font></p>
<?php

if(isset($_GET['stat']))
{
$err=$_GET['stat'];

if($err==4)
{
	echo "<p align='center'><font color='red'>Login detail compulsory</font></p>";
}
elseif($err==3)
{
	echo "<p align='center'><font color='red'>Login details didn't match</font></p>";
}
elseif($err==2)
{
	echo "<p align='center'><font color='red'>Deletion failed. Try Again.</font></p>";
}
}
?>

                   <p align="center"><b>Card Number :</b> &nbsp; <?php echo $card; ?></p>
                   <p align="center"><b>Name :</b>  &nbsp; <?php echo $name; ?></p>
                   <p align="center"><font size="4" color="#666666">Admin Login 
                   Details</font></p>
                   <form method="POST" action="custdelete.php">
                     <p align="center">
                     Username : <input type="text" name="username" size="20"></p>
                     <p align="center">Password :
                     <input type="password" name="password" size="20"></p>
			<input type="hidden" id="custid" name="custid" value="<?php echo $cuid; ?>">
			<input type="hidden" id="crd" name="crd" value="<?php echo $card; ?>">
			<input type="hidden" id="name" name="name" value="<?php echo $name; ?>">
                     <p align="center">
                     <input type="submit" value="Submit" name="B1">
                     <input type="reset" value="Reset" name="B2"></p>
                   </form>
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