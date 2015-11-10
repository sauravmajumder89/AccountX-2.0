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
        <table border="0" cellpadding="10" cellspacing="10" style="border-collapse: collapse" bordercolor="#111111" width="990" id="AutoNumber3" height="407">
          <tr>
            <td height="54" width="608">
             
       <form method="POST" action="monthly_report.php">

      Choose Month :
           <select size="1" name="month" tabindex="10">
           <option selected value="1">January</option>
           <option value="2">February</option>
           <option value="3">March</option>
           <option value="4">April</option>
           <option value="5">May</option>
           <option value="6">June</option>
           <option value="7">July</option>
           <option value="8">August</option>
           <option value="9">September</option>
           <option value="10">October</option>
           <option value="11">November</option>
           <option value="12">December</option>
           </select> <input type="text" name="year" size="4" value="2010">&nbsp; 
	Filter by : <select size="1" name="filter" tabindex="1">
             <option value="all">View All</option>
             <option value="yes">Flag - Yes</option>
             <option value="no">Flag - No</option>

             </select>  
           <input type="submit" value="View Report" name="submit"></form></td>
            <td height="54" width="312">
             
      
      &nbsp;</td>
    </tr>

<?php

if(isset($_POST['month']))
{
$mon=$_POST['month'];
$year=$_POST['year'];
$filt=$_POST['filter'];
}
else
{
$mon=1;
$year=2010;
$filt='all';
}

?>      
          <tr>
            <td valign="top" height="361" width="920" colspan="2">
             <p align="center"><font size="6" color="#C0C0C0">Monthly Report</font>
             <br>
             
<font size="4" color="#C0C0C0">for
<?php
 
switch ($mon)
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
?>
&nbsp; <?php echo $year; ?></font></p>
      
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="900" id="AutoNumber4" bgcolor="#C0C0C0" background="img/nav_bar.gif" height="22">
          <tr>
            <td align="center" valign="middle" height="22" width="236"><b>
            Customer Name</b></td>
            <td align="center" valign="middle" height="22" width="121"><b>Card 
            Number</b></td>
            <td align="center" valign="middle" height="22" width="130"><b>Date 
            of Payment</b></td>
            <td align="center" valign="middle" height="22" width="106"><b>Mode</b></td>
            <td align="center" valign="middle" height="22" width="170"><b>Cheque 
            Number</b></td>
            <td align="center" valign="middle" height="22" width="137"><b>Amount</b></td>
          </tr>
        </table>
        </center>
      </div>
<div align="center">
        <center>
        <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#C0C0C0" width="900" id="AutoNumber4" height="22">
      

<?php

include("dbinfo.inc.php");

if($filt=='yes')
{
$query="SELECT pay_dt,pay_mon,pay_year,subscription,mode,chq_num,card_num FROM elec_transaction WHERE pay_mon=$mon AND pay_year=$year AND card_num IN
(select card_num from elec_customer WHERE flag='$filt')";
}
elseif($filt=='no')
{
$query="SELECT pay_dt,pay_mon,pay_year,subscription,mode,chq_num,card_num FROM elec_transaction WHERE pay_mon=$mon AND pay_year=$year AND card_num IN
(select card_num from elec_customer WHERE flag='$filt')";
}
else
{
$query="SELECT pay_dt,pay_mon,pay_year,subscription,mode,chq_num,card_num FROM elec_transaction WHERE pay_mon=$mon AND pay_year=$year";
}

$result=mysql_query($query);
$num=mysql_numrows($result);

mysql_close();

$i=0;
while ($i < $num) {

$dt=mysql_result($result,$i,"pay_dt");
$mnth=mysql_result($result,$i,"pay_mon");
$yr=mysql_result($result,$i,"pay_year");
$amnt=mysql_result($result,$i,"subscription");
$mode=mysql_result($result,$i,"mode");
$chq=mysql_result($result,$i,"chq_num");
$card=mysql_result($result,$i,"card_num");

include("dbinfo.inc.php");

$query2="SELECT cust_name FROM elec_customer WHERE card_num='$card'";
$result2=mysql_query($query2);

mysql_close();

$j=0;
$name=mysql_result($result2,$j,"cust_name");

?>

	    <tr>
            <td align="center" valign="middle" height="22" width="236"><?php echo $name; ?></td>
            <td align="center" valign="middle" height="22" width="121"><?php echo $card; ?></td>
            <td align="center" valign="middle" height="22" width="130"><?php echo $dt; ?>-<?php echo $mnth; ?>-<?php echo $yr; ?></td>
            <td align="center" valign="middle" height="22" width="106"><?php echo $mode; ?></td>
            <td align="center" valign="middle" height="22" width="170"><?php echo $chq; ?></td>
            <td align="center" valign="middle" height="22" width="137">Rs.<?php echo $amnt; ?></td>
          </tr>
        

<?php
$i++;
}
?>

</table>
        </center>
      </div>
<p align="center"><b>Select Report Fields</b><font color="red">(Disabled)</font></p>

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="1020" id="AutoNumber1" height="122">
          <form method="POST" action="print.php?type=monthly&mon=<?php echo $mon; ?>&year=<?php echo $year; ?>&filter=<?php echo $filt; ?>">
      <tr>
      <td height="87" width="320">&nbsp;</td>
      <td height="87" width="224" valign="top">
        <input type="checkbox" name="cust_name" value="cust_name"> Customer Name<br>
        <input type="checkbox" name="card_num" value="card_num"> Card Number<br>
        <input type="checkbox" name="serial" value="serial"> Serial Number
        <font size="2" color="green">('yes' only)<br>
        </font>
        <input type="checkbox" name="pay_date" value="pay_date"> Date of Payment</p>
      </td>
      <td height="87" width="184" valign="top">
        <input type="checkbox" name="mode" value="mode"> Mode of Payment<br>
        <input type="checkbox" name="chq_num" value="chq_num"> Cheque Number<br>
        <input type="checkbox" name="sub" value="sub"> Amount<br>
        <input type="checkbox" name="start_date" value="start_date"> Payment for</td>
      <td height="87" width="292">&nbsp;</td>
    </tr>
    <tr>
      <td height="35" width="1020" colspan="4">
			<input type="hidden" id="mon" name="mon" value="<?php echo $mon; ?>">
			<input type="hidden" id="year" name="year" value="<?php echo $year; ?>">
                  <input type="hidden" id="year" name="filter" value="<?php echo $filt; ?>">
<p align="center">
        <input type="submit" value="Get Report" name="B1">
        <input type="reset" value="Reset" name="B2"></p>
      </td>
    </tr> </form>
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