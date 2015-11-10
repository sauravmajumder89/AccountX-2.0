<?php include("authenticate.inc.php"); ?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Electrolink :: Customer Database</title>
<script language="JavaScript" fptype="dynamicanimation">
<!--
function dynAnimation() {}
function clickSwapImg() {}
//-->
</script>
<script language="JavaScript1.2" fptype="dynamicanimation" src="file:///D:/Program%20Files/Microsoft%20Office/Office10/fpclass/animate.js">
</script>
</head>

<body topmargin="0" leftmargin="0" onload="dynAnimation()">

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
            <td valign="top" height="1" width="547">
            <form method="POST" action="homepage.php">
              Search Customer : <input type="text" name="keyword" size="20"><select size="1" name="type" tabindex="2">
              <option selected value="card_num">Card Number</option>
              <option value="cust_name">Name</option>
              <option value="cust_add">Address</option>
              <option value="phone">Phone Number</option>
              </select><input type="hidden" id="var" name="var" value="l">
		<input type="submit" value="Submit" name="search"></p>
            </form>
            </td>
            <td valign="top" height="1" width="373">
            <p align="right"><form method="POST" action="homepage.php">
         <p align="right">Filter by : <select size="1" name="filter" tabindex="1">
             <option value="all">View All</option>
             <option value="yes">Flag - Yes</option>
             <option value="no">Flag - No</option>

             </select><input type="hidden" id="var" name="var" value="r">
		<input type="submit" value="Filter" name="btn"></form></p>
            </td>
          </tr>
          <tr>
            <td valign="top" height="340" width="950" colspan="2">
            
             <div align="center">
              <center>
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="946" id="AutoNumber4" height="26" background="img/nav_bar.gif">
                <tr>
                  <td height="26" width="221" valign="middle" align="center">
                  Customer Name</td>
                  <td height="26" width="417" valign="middle" align="center">
                  Customer Address</td>
                  <td height="26" width="217" valign="middle" align="center">
                  Card No.</td>
                  <td height="26" width="91" valign="middle" align="center">Flag</td>
                </tr>
              </table>
              </center>
            </div>
<?php   


include("dbinfo.inc.php");

if(isset($_POST['var']))
{
$var=$_POST['var'];
}
else
{
$var='n';
}

if($var=='r')
{
	$filt='all';
	$filt=$_POST['filter'];

	if($filt=='yes')
	{
	$query="SELECT cust_id,cust_name,cust_add,card_num,flag FROM elec_customer WHERE flag='yes' order by cust_name";
	}
	elseif ($filt=='no')
	{
	$query="SELECT cust_id,cust_name,cust_add,card_num,flag FROM elec_customer WHERE flag='no' order by cust_name";
	}
	else
	{
	$query="SELECT cust_id,cust_name,cust_add,card_num,flag FROM elec_customer order by cust_name";
	}
}
elseif($var=='l')
{
	$key=$_POST['keyword'];
	$type=$_POST['type'];

	$query="SELECT cust_id,cust_name,cust_add,card_num,flag FROM elec_customer where $type LIKE '%$key%' order by cust_name";
}
else
{
	$query="SELECT cust_id,cust_name,cust_add,card_num,flag FROM elec_customer order by cust_name";
}

$result=mysql_query($query);

$num=mysql_numrows($result);

mysql_close();

$i=0;
while ($i < $num) {

$uid=mysql_result($result,$i,"cust_id");
$name=mysql_result($result,$i,"cust_name");
$add=mysql_result($result,$i,"cust_add");
$card=mysql_result($result,$i,"card_num");
$flag=mysql_result($result,$i,"flag");

?>           
            <div align="center">
              <center>
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="945" id="AutoNumber4" height="63">
                <tr>
                  <td height="63" width="40">
                  <p align="center">
                  <a href="customer_details.php?custid=<?php echo $uid; ?>&crd=<?php echo $card; ?>">
                  <img border="0" src="img/info.gif" id="fpAnimswapImgFP1" name="fpAnimswapImgFP1" dynamicanimation="fpAnimswapImgFP1" lowsrc="img/info_hover.gif" width="26" height="25"></a></td>
                  <td height="63" width="179"><?php echo $name; ?></td>
                  <td height="63" width="16">&nbsp;</td>
                  <td height="63" width="401"><?php echo $add; ?></td>
                  <td height="63" width="218" align="center"><?php echo $card; ?></td>
                  <td height="63" width="91">
                  <p align="center">
<?php
if($flag=='yes')
{
?>
                  <img border="0" src="img/tick.gif" width="26" height="25">
<?php
}
else
{
?>
                  <img border="0" src="img/cross.gif" width="26" height="25">

<?php
}
?>
			</td>
                </tr>
              </table>
              </center>
            </div><hr>

<?php
$i++;
}
?>
             
            
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