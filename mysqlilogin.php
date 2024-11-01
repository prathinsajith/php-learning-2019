<?php 

$con=mysqli_connect("localhost","root","","student");
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
 <tr><td>Email:</td><td><input type="text" name="n5"/></td></tr>
<tr><td>Password:</td><td><input type="password" name="n6"/></td></tr>
<tr><td><input type="submit" value="submit" name="n7"/></td></tr>
</table>
</form>

<?php 
if(isset($_POST['n7']))
{
	
$k=5;
 $a=$_POST['n1'];
 $b=$_POST['n2'];
 $c=$_POST['n3'];	
 $e=$_POST['n5'];
 $f=$_POST['n6'];

$i=mysqli_query($con,"insert into user1 values('','$a','$b','$c','$e',AES_ENCRYPT('$f',$k))");
?>
<table border="1">
<tr>

<th>name</th>
<th>email</th>
<th>psw</th>
<?php 

$k=5;

$s=mysqli_query($con,"select name,email,AES_DECRYPT(psw,'$k') from user1");

while($r=mysqli_fetch_array($s))
	{
?>

<tr>
<td> <?php echo $r['name'];?> </td>
<td> <?php echo $r['email'];?> </td>
<td> <?php echo $r[2];?> </td>
</tr>
<?php
}
?>
</table>

</body>
</html>

<?php

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

