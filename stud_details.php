<?php 
session_start();
$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);

echo "welcome";
echo "<br>";
$temp=$_SESSION['staff'] 
$temp1=mysql_query("select * from staff where email='$temp'");
$temp2=mysql_fetch_array($temp1);

$d=$temp2[4];
$se=$temp2[5];
?>
<html>
<head>
</head>
<body>
<table border="1">
<tr>
<th>name</th>
<th>department</th>
<th>semester</th>


<?php 
$s=mysql_query("select * from stud_tbl where dptm='$d' and sem='$se'");

while($r=mysql_fetch_array($s))
{
?>
<tr>
<td> <?php echo $r[2];?> </td>
<td> <?php echo $r[4];?> </td>
<td> <?php echo $r[5];?> </td>
</tr>
<?php
}
?>
</table>
</body>
</html>