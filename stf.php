<?php 
$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);
?>


<html>
<head>
</head>
<body bgcolor="#E6E6FA">
<form method="post" action="">
<table>
<tr><td>Name:</td><td><input type="text" name="n1"/></td></tr>
 <tr><td>Email:</td><td><input type="text" name="n2"/></td></tr>
  <tr><td>department:</td><td><input type="text" name="n3"/></td></tr>
   <tr><td>semester</td><td><input type="text" name="n4"/></td></tr>
 <tr><td>Password:</td><td><input type="password" name="n5"/></td></tr>
 <tr><td><input type="submit" value="submit" name="n6"/></td></tr>
</table>
</form>
</body>
</html>

<?php 
if(isset($_POST['n6']))
{
 $a=$_POST['n1'];
 $e=$_POST['n2'];
 $d=$_POST['n3'];
 $sg=$_POST['n4'];	
 $p=$_POST['n5'];
 
 
$j=mysql_query("insert into stud_staff_log values('','$e','$p','staff')");
$s=mysql_query("select * from stud_staff_log where email='$e' and psw='$p'");
$r=mysql_fetch_array($s);
$i=mysql_query("insert into staff values('','$r[0]','$a','$e','$d','$sg','0')");


if($i && $j)
	
	{
		echo "succesfully inserted";
	}
else
{
	echo "failed";
	
}
}
?>
