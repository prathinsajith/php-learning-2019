<?php 
ob_start();
$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);
?>
<html>
<head>
</head>
<body>
<form method="post">
<table>
<tr><td>Username:</td><td><input type="text" name="f1" value=""/></td></tr>
<tr><td>Password:</td><td><input type="password" name="f2" value=""/></td></tr>
<tr><td><input type="submit" value="submit" name="sub"/></td></tr>
</table>

</form>

</body>
</html>

<?php 
if(isset($_POST['sub']))
{
	
	$u=$_POST['f1'];
	$p=$_POST['f2'];
 $lg=mysql_query("select * from signup_tbl where username='$u' and psw='$p'");
 if($r=mysql_fetch_array($lg))
 {    
	 header("location:home.php");
	 
 }
else
{
	echo "invalid username/password";
}	
}
?>