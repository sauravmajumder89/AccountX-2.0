<?php include("authenticate.inc.php"); ?>
<?php

include("dbinfo.inc.php");

$cuid=$_POST['custid'];
$cust_name=$_POST['cust_name'];
$card_num=$_POST['card_num'];
$cust_add=$_POST['cust_add'];
$flag=$_POST['flag'];
$phone=$_POST['phone'];
$old=$_POST['old_crd'];

$query1 = "UPDATE elec_customer SET cust_name='$cust_name', cust_add='$cust_add', card_num='$card_num', phone='$phone', flag='$flag' WHERE card_num='$old'";

$result1=mysql_query($query1);

$query2 = "UPDATE elec_transaction SET card_num='$card_num' WHERE card_num='$old'";

$result2=mysql_query($query2);


if($result1 && $result2)
{
	header("location:customer_details.php?custid=$cuid&crd=$card_num");
}
else
{
 	header("location:edit_customer.php?custid=$cuid&crd=$card_num&err=1");
}

mysql_close();
