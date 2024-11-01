

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
<tr><td>Address:</td><td><textarea cols="10" rows="5" name="n2"></textarea></td></tr>
<tr><td>Gender:</td><td><input type="radio" name="n3" value="male"/>Male 
                        <input type="radio" name="n3" value="female"/>Female </td></tr>
<tr><td>state:</td><td><select name="n4">
  <option value="kerala">Kerala</option>
  <option value="tamilnadu">Tamilnadu</option>
 </select></td></tr>
 <tr><td>Email:</td><td><input type="text" name="n5"/></td></tr>
<tr><td>Password:</td><td><input type="password" name="n6"/></td></tr>
<tr><td><input type="submit" value="submit" name="n7"/></td></tr>
</table>
</form>
</body>
</html>
<?php 
if(isset($_POST['n7']))
{
 $a=$_POST['n1'];
 $b=$_POST['n2'];
 $c=$_POST['n3'];
 $d=$_POST['n4'];	
 $e=$_POST['n5'];
 $f=$_POST['n6'];
 

$i=mysql_query("insert into user_tbl values('$a','$b','$c','$d','$e','$f')");

if($i)
	
	{
		echo "succesfully inserted";
	}
else
{
	echo "failed";
	
}
}
?>

<?php 
$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);
?>
<html>

<head>
</head>
<body>
<table border="1">
<tr>
<th>name</th>
<th>address</th>
<th>gender</th>
<th>state</th>
<th>email</th>
<th>psw</th>

<?php 
$s=mysql_query("select * from user_tbl");
while($r=mysql_fetch_array($s))
{
?>
<tr>
<td> <?php echo $r[0];?> </td>
<td> <?php echo $r[1];?> </td>
<td> <?php echo $r[2];?> </td>
<td> <?php echo $r[3];?> </td>
<td> <?php echo $r[4];?> </td>
<td> <?php echo $r[5];?> </td>

</tr>
<?php
}
?>
</table>
</body>
</html>













