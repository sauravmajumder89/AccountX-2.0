<?php
$username="electrolink";
$password="12345";
$database="electrolink";

mysql_connect('localhost',$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
?>
