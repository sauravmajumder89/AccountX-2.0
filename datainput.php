<?php include("authenticate.inc.php"); ?>
<?php

include("dbinfo.inc.php");

$cust_name=$_POST['cust_name'];
$card_num=$_POST['card_num'];
$cust_add=$_POST['cust_add'];
$flag=$_POST['flag'];
$phone=$_POST['phone'];

if($cust_name!="" && $cust_add!="" && $flag!="" && $phone!="")
{ 

if($flag=='no')
{
$query = "INSERT INTO elec_customer VALUES ('','$cust_name','$cust_add','$card_num','$phone','$flag','')";
}
elseif($flag=='yes')
{
$sql="SELECT * from elec_customer WHERE flag='yes'";

$res=mysql_query($sql);

$num=mysql_numrows($res);

mysql_close();

$s=mysql_result($res,$num-1,"serial");

$serial=$s+1;

$query = "INSERT INTO elec_customer VALUES ('','$cust_name','$cust_add','$card_num','$phone','$flag',$serial)";

include("dbinfo.inc.php");
}

if(mysql_query($query))
{
	header("location:homepage.php");
}
else
{
 	header("location:add_customer.php?err=1");
}

mysql_close();
}
else
{
 	header("location:add_customer.php?err=2");
}
?>
