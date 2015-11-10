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
               <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="661" id="AutoNumber4" height="332">
                 <tr>
                   <td width="661" height="78" colspan="2">

<?php

$cuid=$_GET['custid'];
$card=$_GET['crd'];

include("dbinfo.inc.php");

$query="SELECT * FROM elec_customer WHERE cust_id=$cuid AND card_num='$card'";


$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

if($num!=1)
{
echo "<p align='center'><b><font color='red'>Customer is not found. Please try again.</font></b></p>";
}

?>                   <p align="center"><font size="6" color="#C0C0C0">Add 
                   Transaction<br>
                   </font><b>Card Number : </b><?php echo $card; ?></p>

<?php

if(isset($_GET['err']))
{
$err=$_GET['err'];

if($err==1)
{
	echo "<p align='center'><font color='red'>Customer cannot be added. Please Try Again.</font></p><br>";
}
elseif($err==2)
{
	echo "<p align='center'><font color='red'>One or more fields may be blank. Please fill all of them.</font></p><br>";
}
elseif($err==3)
{
	echo "<p align='center'><font color='red'>Please Fill the Cheque Number,incase payment is in cheque.</font></p><br>";
}
}
?>

                   </td>
                 </tr>
                 <tr>
                   <td valign="top" width="326" height="202"> <form method="POST" action="transinput.php">
			<input type="hidden" id="custid" name="custid" value="<?php echo $cuid; ?>">
			<input type="hidden" id="crd" name="crd" value="<?php echo $card; ?>">
                   Date of Payment : 
                   <select size="1" name="pay_day">
           <option selected value="01">01</option>
           <option value="02">02</option>
           <option value="03">03</option>
           <option value="04">04</option>
           <option value="05">05</option>
           <option value="06">06</option>
           <option value="07">07</option>
           <option value="08">08</option>
           <option value="09">09</option>
           <option value="10">10</option>
           <option value="11">11</option>
           <option value="12">12</option>
           <option value="13">13</option>
           <option value="14">14</option>
           <option value="15">15</option>
           <option value="16">16</option>
           <option value="17">17</option>
           <option value="18">18</option>
           <option value="19">19</option>
           <option value="20">20</option>
           <option value="21">21</option>
           <option value="22">22</option>
           <option value="23">23</option>
           <option value="24">24</option>
           <option value="25">25</option>
           <option value="26">26</option>
           <option value="27">27</option>
           <option value="28">28</option>
           <option value="29">29</option>
           <option value="30">30</option>
           <option value="31">31</option>
           </select><select size="1" name="pay_month">
           <option selected value="01">January</option>
           <option value="02">February</option>
           <option value="03">March</option>
           <option value="04">April</option>
           <option value="05">May</option>
           <option value="06">June</option>
           <option value="07">July</option>
           <option value="08">August</option>
           <option value="09">September</option>
           <option value="10">October</option>
           <option value="11">November</option>
           <option value="12">December</option>
           </select><input type="text" name="pay_year" size="4" value="2010"><p>Installation Charge&nbsp;&nbsp;&nbsp;&nbsp; : Rs.<input type="text" name="inst_charge" size="16"></p>
                   <p>Reconnection Charge : Rs.<input type="text" name="recon_charge" size="16"></p>
                   <p>Ware Charge&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rs.<input type="text" name="ware_charge" size="16"></p>
                   <p>Subscription&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Rs.<input type="text" name="sub" size="16"></p>
                   </td>
                   <td valign="top" width="335" height="202">
                   <p>Service Tax&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :
           <input type="text" name="tax" size="16"></p>
                   <p>Mode Of Payment :
                 
                   <select size="1" name="mode">
           <option selected value="Cash">Cash</option>
           <option value="Cheque">Cheque</option>
           </select><p>Cheque Number&nbsp;&nbsp;&nbsp; :
           <input type="text" name="chq" size="16"><p>Payment for&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <select size="1" name="start_month">
           <option selected value="01">January</option>
           <option value="02">February</option>
           <option value="03">March</option>
           <option value="04">April</option>
           <option value="05">May</option>
           <option value="06">June</option>
           <option value="07">July</option>
           <option value="08">August</option>
           <option value="09">September</option>
           <option value="10">October</option>
           <option value="11">November</option>
           <option value="12">December</option>
           </select><input type="text" name="start_year" size="4" value="2010"></td>
                 </tr>
                 <tr>
                   <td valign="top" width="661" height="52" colspan="2">
                  
                     <p align="center">
                     <input type="submit" value="Add Transaction"> <input type="reset" value="Reset" name="B2"></p>
                   </form>
                   <p align="center">&nbsp;</td>
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