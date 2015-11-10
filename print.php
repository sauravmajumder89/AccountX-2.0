<?php include("authenticate.inc.php"); ?>
<script language="javascript">
function printpage()
 {
  window.print();
 }
</script>
<?php

if(isset($_GET['type']))
{
$type=$_GET['type'];

if($type=='monthly')
{

$mon=$_GET['mon'];
$year=$_GET['year'];
$filt=$_GET['filter'];

?>

<p align="center"><font size="6">Report</font>
             <br>
             
<font size="4">for
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

	<div align="center">
        <center>
        <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#C0C0C0" width="900" id="AutoNumber4" height="22">
          <tr>
            <td align="center" valign="middle" height="22" width="236"><?php echo $name; ?></td>
            <td align="center" valign="middle" height="22" width="121"><?php echo $card; ?></td>
            <td align="center" valign="middle" height="22" width="130"><?php echo $dt; ?>-<?php echo $mnth; ?>-<?php echo $yr; ?></td>
            <td align="center" valign="middle" height="22" width="106"><?php echo $mode; ?></td>
            <td align="center" valign="middle" height="22" width="170"><?php echo $chq; ?></td>
            <td align="center" valign="middle" height="22" width="137">Rs.<?php echo $amnt; ?></td>
          </tr>
        </table>
        </center>
      </div>

<?php
$i++;
}
?>
<form method="POST" action="#">
               <p align="center">
               <br>
               <input type="submit" value="Print" name="print" onclick="printpage();"></p>
             </form>
<form method="POST" action="monthly_report.php">
               <p align="center">
               
               <input type="submit" value="Back" name="print"></p>
             </form>
<?php
}
elseif($type=='daily')
{

$day=$_GET['day'];
$mon=$_GET['mon'];
$year=$_GET['year'];
$filt=$_GET['filter'];

?>      
          <p align="center"><font size="6" >Report</font>
             <br>
             
<font size="4">for &nbsp; <?php echo $day; ?> 
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
<?php

include("dbinfo.inc.php");

if($filt=='yes')
{
$query="SELECT pay_dt,pay_mon,pay_year,subscription,mode,chq_num,card_num FROM elec_transaction WHERE pay_dt=$day AND pay_mon=$mon AND pay_year=$year AND card_num IN
(select card_num from elec_customer WHERE flag='$filt')";
}
elseif($filt=='no')
{
$query="SELECT pay_dt,pay_mon,pay_year,subscription,mode,chq_num,card_num FROM elec_transaction WHERE pay_dt=$day AND pay_mon=$mon AND pay_year=$year AND card_num IN
(select card_num from elec_customer WHERE flag='$filt')";
}
else
{
$query="SELECT pay_dt,pay_mon,pay_year,subscription,mode,chq_num,card_num FROM elec_transaction WHERE pay_dt=$day AND pay_mon=$mon AND pay_year=$year";
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

	<div align="center">
        <center>
        <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#C0C0C0" width="900" id="AutoNumber4" height="22">
          <tr>
            <td align="center" valign="middle" height="22" width="236"><?php echo $name; ?></td>
            <td align="center" valign="middle" height="22" width="121"><?php echo $card; ?></td>
            <td align="center" valign="middle" height="22" width="130"><?php echo $dt; ?>-<?php echo $mnth; ?>-<?php echo $yr; ?></td>
            <td align="center" valign="middle" height="22" width="106"><?php echo $mode; ?></td>
            <td align="center" valign="middle" height="22" width="170"><?php echo $chq; ?></td>
            <td align="center" valign="middle" height="22" width="137">Rs.<?php echo $amnt; ?></td>
          </tr>
        </table>
        </center>
      </div>

<?php
$i++;
}
?>
<form method="POST" action="#">
               <p align="center">
               <br>
               <input type="submit" value="Print" name="print" onclick="printpage();"></p>
             </form>
<form method="POST" action="daily_report.php">
               <p align="center">
               <input type="submit" value="Back" name="print"></p>
             </form>
<?php
}
}
?>

