<?php 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("aa",$con);
ob_start();
$g=$_SESSION['NAME'];
?>
<html>
<head>
<script src="jquery.min.js"></script>
</head>
<div id="kl" >
<div id="mm">
<body >
<div id="yy">
<p >hello world<p>
<h1 align="center">REGISTRATION</h1></th></tr>
<table align="center">:
<form method="post" action="">
<tr><td>name:</td><td><input type="text" name="n1" value=""/></td></tr>
<tr><td>email:</td><td><input type="text" name="n2" value=""/></td></tr>
<tr><td>department:</td><td><input type="text" name="n3" value=""/></td></tr>
<tr><td>semester:</td><td><input type="text" name="n4" value=""/></td></tr>
<tr><td>password</td><td><input type="password" name="n5" value="" /></td></tr>
 <td><input type="submit" id="yz" name="sub" value="submit" align="right"/></td></tr>
</form>
 </table>
 <table border="2" >
<tr>
<th>name</th>
<th>password</th>
</tr>
<?php
$k =5;
$y=mysql_query("SELECT name,AES_DECRYPT(pass,'$k') FROM `reg`");
//echo "SELECT name,AES_DECRYPT(pass,'$k')FROM `reg`";
while($z=mysql_fetch_array($y))
{
	//var_dump($z);die();
?>
<tr>
<td><?php echo $z['name'];?></td>
<td><?php echo $z[1];?></td>
</tr>
<?php
}
?>
</table>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['sub']))
{
	$a=$_POST['n1'];
	$b=$_POST['n2'];
	$c=$_POST['n3'];
	$d=$_POST['n4'];
	$e=$_POST['n5'];
   $k =5;
$u=mysql_query("insert into reg values('','$a','$b','$c','$d',AES_ENCRYPT('$e',$k))");
echo "insert into reg values('','$a','$b','$c','$d',AES_ENCRYPT('$e',$k)";

echo"SELECT name,AES_DECRYPT(pass,'$k' )FROM `reg`";

if($u)

{
	echo"succesfully inserted";
}
else
	{
	echo"failed";
}
}
   
?>