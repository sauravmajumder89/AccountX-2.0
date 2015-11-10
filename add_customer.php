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
        <table border="0" cellpadding="10" cellspacing="10" style="border-collapse: collapse" bordercolor="#111111" width="990" id="AutoNumber3" height="273">
          <tr>
            <td valign="top" height="341" width="920">
             <div align="center">
               <center>
               <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="383" id="AutoNumber4" height="377">
                 <tr>
                   <td valign="middle" width="383" height="377">
                   <p align="center"><font size="6" color="#C0C0C0">Add New 
                   Customer</font></p>
<?php

if(isset($_GET['err']))
{
$err=$_GET['err'];

if($err==1)
{
	echo "<p align='center'><font color='red'>Customer cannot be added. Please Try Again.</font></p>";
}
elseif($err==2)
{
	echo "<p align='center'><font color='red'>One or more fields may be blank. Please fill all of them.</font></p>";
}
}
?>
                   <form method="POST" action="datainput.php">
                     <p align="left">
                     Customer Name :
                     <input type="text" name="cust_name" size="31" tabindex="1"></p>
                     <p align="left">Customer Address :
                     <textarea rows="6" name="cust_add" cols="39" tabindex="2"></textarea></p>
                     <p align="left">Customer Phone Number :
                     <input type="text" name="phone" size="23" tabindex="3"></p>
                     <p align="left">Card Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                     : <input type="text" name="card_num" size="23" tabindex="4"></p>
                     <p align="left">Flag : <select size="1" name="flag">
                     <option selected value="yes">Yes</option>
                     <option value="no">No</option>
                     </select></p>
                     <p align="center">
                     <input type="submit" value="Add Customer" name="B1">
                     <input type="reset" value="Reset" name="B2"></p>
                   </form>
                   <p align="center"><font color="#FF0000">All fields are 
                   mandatory</font></td>
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