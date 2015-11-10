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
             
       <form method="POST" action="expense.php">

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
           </select> <input type="text" name="year" size="4" value="2010">
		<select size="1" name="type">
                     <option selected value="all">All</option>
                     <option value="purchase">Purchase</option>
			   <option value="salary">Salary</option>
                     <option value="transportation">Transportation</option>
                     <option value="misc">Misc</option>
                     </select>  
           <input type="submit" value="View Report" name="submit"></form></td>
            <td height="54" width="312">
             
      
      &nbsp;</td>
    </tr>
          <tr>
<?php

if(isset($_POST['month']))
{
$mon=$_POST['month'];
$year=$_POST['year'];
$type=$_POST['type'];
}
else
{
$mon="";
$year="";
$type='all';
}
?>      

            <td valign="top" height="361" width="920" colspan="2">
             <p align="center"><font size="6" color="#C0C0C0">Expense Report</font>
             <br>
<?php

if($mon!="" && $year!="")
{

?>
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
&nbsp; <?php echo $year; ?></font>
</p>

<?php
}
?>

      
      <div align="center">
        <center>
        <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="900" id="AutoNumber4" bgcolor="#C0C0C0" background="img/nav_bar.gif" height="22">
          <tr>
            <td align="center" valign="middle" height="22" width="130"><b>Date</b></td>
            <td align="center" valign="middle" height="22" width="412"><b>
            Purpose</b></td>
            <td align="center" valign="middle" height="22" width="175"><b>Amount</b></td>
            <td align="center" valign="middle" height="22" width="183"><b>
            Voucher No.</b></td>
          </tr>
        </table>
        </center>
      </div>
 <div align="center">
        <center>
        <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#C0C0C0" width="900" id="AutoNumber4" height="22">     
<?php

include("dbinfo.inc.php");

if($mon!="" && $year!="" && $type=='all')
{
$query="SELECT * FROM elec_exp WHERE ex_mon=$mon AND ex_year=$year";
}
elseif($mon!="" && $year!="" && $type!='all')
{
$query="SELECT * FROM elec_exp WHERE ex_mon=$mon AND ex_year=$year AND type='$type'";
}
else
{
$query="SELECT * FROM elec_exp";
}

$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

$i=0;
while ($i < $num) {

$exid=mysql_result($result,$i,"exid");
$ex_day=mysql_result($result,$i,"ex_day");
$ex_mon=mysql_result($result,$i,"ex_mon");
$ex_year=mysql_result($result,$i,"ex_year");
$typ=mysql_result($result,$i,"type");
$purpose=mysql_result($result,$i,"purpose");
$amount=mysql_result($result,$i,"amount");
$voucher=mysql_result($result,$i,"voucher");

?>

	   <tr>
            <td align="center" valign="middle" height="22" width="129"><?php echo $ex_day; ?>-<?php echo $ex_mon; ?>-<?php echo $ex_year; ?></td>
            <td align="center" valign="middle" height="22" width="413"><?php echo $purpose; ?>(<?php echo $typ; ?>)</td>
            <td align="center" valign="middle" height="22" width="175">Rs.<?php echo $amount; ?></td>
            <td align="center" valign="middle" height="22" width="183"><?php echo $voucher; ?></td>
          </tr>
        

<?php
$i++;
}
?>
</table>
        </center>
      </div>
             <form method="POST" action="add_ex.php">
               <p align="center">
               <br>
               <input type="submit" value="Add Expense" name="add"></p>
             </form>
             <p align="center">&nbsp;</td>
          </tr>
  </table>
  </center>
</div>
<p align="left"><font size="2">&nbsp;&nbsp; Developed by Saurav Majumder</font></p>

</body>

</html>