<?php include("authenticate.inc.php"); ?>
<?php

include("dbinfo.inc.php");

$realpass=$_POST['realpass'];

$newpass=$_POST['newpass'];

$newpass_con=$_POST['newpass_con'];

if($reallpass!="" && $newpass!="" && $newpass_con!="")
{
	$enc_real=md5($realpass);

	if($enc_real==$pass && $newpass==$newpass_con)
	{

		$enc_new=md5($newpass);

		$sql="UPDATE elec_admin SET password='$enc_new' WHERE password='$pass'";

		$result=mysql_query($sql);

		if($result)
		{
			header("location:change_pass.php?stat=1");
		}
		else
		{
			header("location:change_pass.php?stat=2");
		}
	}
	else
	{
		header("location:change_pass.php?stat=2");
	}
}
else
{
	header("location:change_pass.php?stat=2");
}

?>
