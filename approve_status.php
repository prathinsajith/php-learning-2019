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
<tr><td>Name:</td><td><input type="text" name="n1"/></td></tr>
<tr><td>Address:</td><td><textarea cols="10" rows="5" name="n2"></textarea></td></tr>
<tr><td>Gender:</td><td><input type="radio" name="n3" value="male"/>Male 
                        <input type="radio" name="n3" value="female"/>Female </td></tr>
<tr><td>state:</td><td><select name="n4">
  <option value="kerala">Kerala</option>
  <option value="tamilnadu">Tamilnadu</option>
 </select></td></tr>
 <tr><td>Email:</td><td><input type="text" name="n5"/></td></tr>
  <tr><td>username:</td><td><input type="text" name="n6"/></td></tr>
 <tr><td>Password:</td><td><input type="password" name="n7"/></td></tr>
 <tr><td><input type="submit" value="submit" name="n8"/></td></tr>
</table>
</form>

<?php 
if(isset($_POST['n8']))
{
 $a=$_POST['n1'];
 $b=$_POST['n2'];
 $c=$_POST['n3'];
 $d=$_POST['n4'];	
 $e=$_POST['n5'];
 $u=$_POST['n6'];
 $p=$_POST['n7'];
 
$j=mysql_query("insert into login_tbl values('','$u','$p','student')");
$s=mysql_query("select * from login_tbl where username='$u' and psw='$p'");
$r=mysql_fetch_array($s);
$i=mysql_query("insert into signup_tbl values('','$r[0]','$a','$b','$c','$d','$e','$u','0')");



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
<?php 
$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);
?>

<table border="1">
<tr>
<th>id</th>
<th>logid</th>
<th>name</th>
<th>address</th>
<th>gender</th>
<th>state</th>
<th>email</th>
<th>username</th>


<?php 
$s=mysql_query("select * from signup_tbl where status='0'");

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
<td> <?php echo $r[6];?> </td>
<td> <?php echo $r[7];?> </td>


<td> <a href="delete.php ?id=<?php echo $r[0];?>">delete </a> </td>
<td> <a href="edit1.php?id=<?php echo $r[0];?>">edit </a> </td>
<td> <a href="approve_status.php?id=<?php echo $r[0];?>">approve </a> </td>


</tr>
<?php
}
?>
</table>


<?php
if(isset($_GET['id']))
{
	$k=$_GET['id'];
	$a=1;
	$id=mysql_query("update signup_tbl set status='$a' where id='$k'");
}
?>

</html>





