<?php 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("college",$con);
ob_start();
?>
<html>
<head>
<style>
body
{
background-color:#FFC300    ;
}
</style>
</head>
<body>
<table align="center">:
<form method="post" action="">
<tr><td>name:</td><td><input type="text" name="n1" value=""/></td></tr>
<tr><td>email:</td><td><input type="text" name="n2" value=""/></td></tr>
<tr><td>department:</td><td><input type="text" name="n3" value=""/></td></tr>
<tr><td>semester:</td><td><input type="text" name="n4" value=""/></td></tr>
<tr><td>password</td><td><input type="password"name="n5" value="" /></td></tr>
 <td><input type="submit" name="submit" value="submit" align="right"/></td></tr>
</form>
 </table>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$a=$_POST['n1'];
	$b=$_POST['n2'];
	$c=$_POST['n3'];
	$d=$_POST['n4'];
	$e=$_POST['n5'];
	$i=mysql_query("insert into student values('','$a','$b','$c','$d','student')");
	$o=mysql_insert_id();
    $m=mysql_query("insert into login values('','$o','$a','$e','student')");
if($i)
{
	echo"succesfully inserted";
}
else
	{
	echo"failed";
}
}
?>