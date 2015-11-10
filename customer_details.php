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
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="1020" id="AutoNumber2" height="461">
    <tr>
      <td height="461" width="1014" valign="top">
      
      <p align="center"></p>
      <div align="center">
        <center>
        <table border="0" cellpadding="10" cellspacing="10" style="border-collapse: collapse" bordercolor="#111111" width="990" id="AutoNumber3" height="368">
          <tr>
            <td valign="top" height="436" width="920">
<?php

$cuid=$_GET['custid'];

include("dbinfo.inc.php");

$query="SELECT * FROM elec_customer WHERE cust_id=$cuid";
$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

$i=0;

$uid=mysql_result($result,$i,"cust_id");
$name=mysql_result($result,$i,"cust_name");
$add=mysql_result($result,$i,"cust_add");
$card=mysql_result($result,$i,"card_num");
$phone=mysql_result($result,$i,"phone");

?>
             
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="102%" id="AutoNumber4" height="100">
          <tr>
            <td width="100%" height="40" valign="top" colspan="3">
            <p align="center"><font size="6" color="#C0C0C0">Customer Details</font></td>
          </tr>
          <tr>
            <td width="42%" height="29" valign="middle" dir="ltr"><b>Customer Name 
            :</b> <?php echo $name; ?></td>
            <td width="30%" height="29" valign="middle" dir="ltr"><b>Card Number :</b> <?php echo $card; ?>
            </td>
            <td width="28%" height="29" valign="middle" dir="ltr"><b>Phone No. :</b><?php echo $phone; ?>
            </td>
          </tr>
          <tr>
            <td width="71%" height="31" valign="middle" colspan="2" dir="ltr">
            <b>Customer Address : </b><?php echo $add; ?></td>
            <td width="29%" height="31" valign="middle" dir="ltr">
            <form method="POST" action="edit_customer.php?custid=<?php echo $uid; ?>">
              <p align="center">
              <input type="submit" value="Edit Customer Details" name="B3" style="float: left"></p>
            </form>
            </td>
          </tr>
        </table>
        </center>
      </div>
      <p align="center"><font size="4" color="#C0C0C0">Transaction Details</font>
      </p>


     <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="950" id="AutoNumber5" bgcolor="#CCCCCC" background="img/nav_bar.gif" height="23">
          <tr>
            <td height="23" align="center" valign="middle" width="110">Date</td>
            <td height="23" align="center" valign="middle" width="124">
            Installation Charge</td>
            <td height="23" align="center" valign="middle" width="151">
            Reconnection Charge</td>
            <td height="23" align="center" valign="middle" width="118">Ware 
            Charge</td>
            <td height="23" align="center" valign="middle" width="116">
            Subscription</td>
            <td height="23" align="center" valign="middle" width="99">Service 
            Tax</td>
            <td height="23" align="center" valign="middle" width="119">Payment 
            For</td>

          </tr>
        </table>
        </center>
      </div>
       <div align="center">
        <center>
        <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#CCCCCC" width="950" id="AutoNumber5" height="23">
<?php   

$card=$_GET['crd'];

include("dbinfo.inc.php");

$sql2="SELECT * FROM elec_transaction WHERE card_num='$card'";

$result2=mysql_query($sql2);

$num2=mysql_numrows($result2);

mysql_close();

$x=0;

while ($x < $num2) {

$trans_id=mysql_result($result2,$x,"trans_id");
$pay_day=mysql_result($result2,$x,"pay_dt");
$pay_month=mysql_result($result2,$x,"pay_mon");
$pay_year=mysql_result($result2,$x,"pay_year");
$inst_charge=mysql_result($result2,$x,"inst_charge");
$recon_charge=mysql_result($result2,$x,"recon_charge");
$ware_charge=mysql_result($result2,$x,"ware_charge");
$sub=mysql_result($result2,$x,"subscription");
$tax=mysql_result($result2,$x,"tax");
$mode=mysql_result($result2,$x,"mode");
$chq=mysql_result($result2,$x,"chq_num");
$start_month=mysql_result($result2,$x,"start_mon");
$start_year=mysql_result($result2,$x,"start_year");

?>     

	<tr>
            <td height="23" align="center" valign="middle" width="110"><?php echo $pay_day;?>/<?php echo $pay_month;?>/<?php echo $pay_year;?></td>
            <td height="23" align="center" valign="middle" width="124">
            Rs.<?php echo $inst_charge;?></td>
            <td height="23" align="center" valign="middle" width="151">
            Rs.<?php echo $recon_charge;?></td>
            <td height="23" align="center" valign="middle" width="118">Rs.<?php echo $ware_charge;?></td>
            <td height="23" align="center" valign="middle" width="116">
            Rs.<?php echo $sub;?></td>
            <td height="23" align="center" valign="middle" width="99">Rs.<?php echo $tax;?></td>
            <td height="23" align="center" valign="middle" width="119"><?php 

switch ($start_month)
{
case 1:
  echo "January";
  break;
case 2:
  echo "February";
  break;
case 3:
  echo "March";
  break;
case 4:
   echo "April";
  break;
case 5:
  echo "May";
  break;
case 6:
  echo "June";
  break;
case 7:
  echo "July";
  break;
case 8:
  echo "August";
  break;
case 9:
  echo "September";
  break;
case 10:
  echo "October";
  break;
case 11:
  echo "November";
  break;
case 12:
  echo "December";
  break;
}
?>,<?php echo $start_year;?></td>
          </tr>

<?php
$x++;
}
?>
        </table>
        </center>
      </div>
      <form method="POST" action="add_tran.php?custid=<?php echo $cuid;?>&crd=<?php echo $card; ?>">
        <p>
        <br>
        <input type="submit" value="Add Transaction" name="B1"></p>
      </form>
&nbsp;</tr>
  </table>
  </center>
</div>
<p align="left"><font size="2">&nbsp;&nbsp; Developed by Saurav Majumder</font></p>

</body>

</html>