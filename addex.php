<?php include("authenticate.inc.php"); ?>
<?php

include("dbinfo.inc.php");

$ex_day=$_POST['ex_day'];
$ex_mon=$_POST['ex_mon'];
$ex_year=$_POST['ex_year'];
$type=$_POST['ex_type'];
$purpose=$_POST['purpose'];
$amount=$_POST['amount'];
$voucher=$_POST['voucher'];

if($ex_day!="" && $ex_mon!="" && $ex_year!="" && $purpose!="" && $amount!="" && $voucher!="")
{
	$query = "INSERT INTO elec_exp VALUES ('',$ex_day,$ex_mon,$ex_year,'$type','$purpose',$amount,'$voucher')";

	if(mysql_query($query))
	{
		header("location:expense.php");
	}
	else
	{
 		header("location:add_ex.php?err=1");
	}

	mysql_close();
}
else
{
	header("location:add_ex.php?err=2");
}

?>
