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
                   
<?php

$cuid=$_GET['custid'];

include("dbinfo.inc.php");

$query="SELECT * FROM elec_customer WHERE cust_id=$cuid";

$result=mysql_query($query);

mysql_close();

$i=0;

$uid=mysql_result($result,$i,"cust_id");
$name=mysql_result($result,$i,"cust_name");
$add=mysql_result($result,$i,"cust_add");
$card=mysql_result($result,$i,"card_num");
$phone=mysql_result($result,$i,"phone");
$flag=mysql_result($result,$i,"flag");

?>


			<td valign="middle" width="383" height="377">
                   <p align="center"><font size="6" color="#C0C0C0">Edit 
                   Customer</font></p>
                   <form method="POST" action="edit_cust.php">
                     <p align="left">
                     Customer Name :
                     <input type="text" name="cust_name" size="31" tabindex="1" value="<?php echo $name; ?>"></p>
                     <p align="left">Customer Address :
                     <textarea rows="6" name="cust_add" cols="39" tabindex="2"><?php echo $add; ?></textarea></p>
                     <p align="left">Customer Phone Number :
                     <input type="text" name="phone" size="23" tabindex="3" value="<?php echo $phone; ?>"></p>
                     <p align="left">Card Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                     : <input type="text" name="card_num" size="23" tabindex="4" value="<?php echo $card; ?>"></p>
                     <p align="left">Flag : <select size="1" name="flag">
                     <option selected value="<?php echo $flag; ?>"><?php echo $flag; ?></option>
                     <option value="yes">Yes</option>
			   <option value="no">No</option>
                     </select></p><input type="hidden" id="old_crd" name="old_crd" value="<?php echo $card; ?>">
						<input type="hidden" id="custid" name="custid" value="<?php echo $cuid; ?>">
                     <p align="center">
                     <input type="submit" value="Edit Customer" name="B1">
                     <input type="reset" value="Reset" name="B2"></p>
                   </form>
                   <p align="center"><a href="delete.php?custid=<?php echo $cuid; ?>&card=<?php echo $card; ?>&name=<?php echo $name; ?>" style="text-decoration: none">Delete Customer</a></td>
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