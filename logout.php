<?php

$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);

ob_start();
session_start();
session_destroy();
header("location:std_stf_login.php");
?>