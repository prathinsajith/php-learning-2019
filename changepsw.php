<?php 
ob_start();
$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);
?>


<html>
<head>
</head>
<body bgcolor="#E6E6FA">
<form method="post" action="">
<table>
<tr><td>old password</td><td><input type="password" name="n1"/></td></tr>
<tr><td>new password</td><td><input type="password" name="n2"/></td></tr>
<tr><td>confirm Password:</td><td><input type="password" name="n3"/></td></tr>
<tr><td><input type="submit" value="submit" name="sub"/></td></tr>
</table>
</form>

<?php 
if(isset($_POST['sub']))
{
	$old=$_POST['n1'];
	$new=$_POST['n2'];
	$cp=$_POST['n3'];
 $lg=mysql_query("select * from stud_staff_log where psw='$old'");
 $r=mysql_fetch_array($lg);
 $temp=$r['id'];
 if($new==$cp)
 {
 $up=mysql_query("update stud_staff_log set psw='$new' where id='$temp'");
echo "succesfully inserted";

 }
 else
 {
   echo "error";
 
 }
}
 
 
 ?>