<?php
session_start();

unset($_SESSION['usr']);
unset($_SESSION['pass']);
session_destroy();

header("location:index.php");	

?>      
