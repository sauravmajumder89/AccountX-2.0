<?php 

include("authenticate.inc.php");

include("dbinfo.inc.php");

$usrname=$_POST['username'];
$passwd=$_POST['password'];
$cuid=$_POST['custid'];
$card=$_POST['crd'];
$name=$_POST['name'];

echo $cuid;

if($usrname!="" && $passwd!="")
{
	$enc_pass=md5($passwd);

	if($enc_pass==$pass)
	{

		$sql="select * from elec_admin where username='$usrname' and password='$enc_pass'";

		$result=mysql_query($sql);
		
		$count=mysql_num_rows($result);

		mysql_close();

		if($count==1)
		{
			
			include("dbinfo.inc.php");
			
			$sql2="DELETE from elec_customer where cust_id=$cuid";
			$result2=mysql_query($sql2);

			mysql_close();

			if($result2)
			{
				header("location:homepage.php");
			}
			else
			{
				header("location:delete.php?custid=$cuid&card=$card&name=$name&stat=2");
			}
		
		}
		else
		{
			header("location:delete.php?custid=$cuid&card=$card&name=$name&stat=3");
		}
	}
	else
	{
		header("location:delete.php?custid=$cuid&card=$card&name=$name&stat=3");
	}
}
else
{
	header("location:delete.php?custid=$cuid&card=$card&name=$name&stat=4");
}

?>
