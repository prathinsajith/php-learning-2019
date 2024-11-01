<?php 
$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);
?>


<html>

<head>
</head>
<body>

<form method="POST" onclick="">

Name: <input type="text" name="n1"/> 
<input type="submit" name="n2" value="search"/>
</form>

<table border="1">
<tr>
<th>name</th>
<th>address</th>
<th>gender</th>
<th>state</th>
<th>email</th>
<th>psw</th>
</tr>
<?php 

 if(isset($_POST['n2']))
  {
   $a=$_POST['n1'];
 $s=mysql_query("select * from user_tbl where name='$a'");
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
}
?>
</table>
</body>
</html>

