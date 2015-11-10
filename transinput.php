<?php include("authenticate.inc.php"); ?>
<?php

include("dbinfo.inc.php");

$cuid=$_POST['custid'];
$card=$_POST['crd'];
$pay_day=$_POST['pay_day'];
$pay_month=$_POST['pay_month'];
$pay_year=$_POST['pay_year'];
$inst_charge=$_POST['inst_charge'];
$recon_charge=$_POST['recon_charge'];
$ware_charge=$_POST['ware_charge'];
$sub=$_POST['sub'];
$tax=$_POST['tax'];
$mode=$_POST['mode'];
$chq=$_POST['chq'];
$start_month=$_POST['start_month'];
$start_year=$_POST['start_year'];

if($pay_day!="" && $pay_month!="" && $pay_year!="" && $sub!="" && $mode!="" && $start_month!="" && $start_year!="")
{
	if($inst_charge=="")
	{
		$inst_charge=0;
	}
	if($recon_charge=="")
	{
		$recon_charge=0;
	}
	if($ware_charge=="")
	{
		$ware_charge=0;
	}
	if($tax=="")
	{
		$tax=0;
	}
	if($chq=="")
	{
		$chq='N/A';
	}

	$query = "INSERT INTO elec_transaction VALUES ('',$pay_day,$pay_month,$pay_year,$inst_charge,$recon_charge,$ware_charge,$sub,$tax,'$mode','$chq',$start_month,$start_year,'$card')";

	if(mysql_query($query))
	{
		header("location:customer_details.php?custid=$cuid&crd=$card");
	}
	else
	{
 		header("location:add_tran.php?custid=$cuid&&crd=$card&err=1");
	}

	mysql_close();
}
else
{
		header("location:add_tran.php?custid=$cuid&&crd=$card&err=2");
}
?>
