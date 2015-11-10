<?php

include("dbinfo.inc.php");

$sql="SELECT * from elec_customer WHERE flag='yes'";

$res=mysql_query($sql);

$num=mysql_numrows($res);

mysql_close();

$s=mysql_result($res,$num,"serial");

$serial=$s+1;

echo $s."<br>".$serial;

?>
