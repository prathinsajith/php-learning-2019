<?php 
session_start();
?>
welcome

 <?php  if(isset($_SESSION["un"]))
	 echo $_SESSION["un"];
 else
	 echo "not set";?>