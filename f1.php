 




<?php 
$con=mysql_connect("localhost","root","");
$a=mysql_select_db("",$con);
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
</body>
</html>

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
$s=mysql_query("select * from login_tbl where username='$u' and password='$p'");
$r=mysql_fetch_array($s);
$i=mysql_query("insert into signup_tbl values('','$r[0]','$a','$b','$c','$d','$e','0')");


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
