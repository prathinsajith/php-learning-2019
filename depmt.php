<?php 
session_start();
$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);

echo "welcome";
echo "<br>";
echo $_SESSION['staff'];
$e=$_SESSION['staff'];
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
$s=mysql_query("select * from staff where email='$e'");

while($r=mysql_fetch_array($s))
{
?>
<tr>
<td> <?php echo $r[2];?> </td>
<td> <?php echo $r[4];?> </td>
<td> <?php echo $r[5];?> </td>
</tr>
<?php

$_SESSION['dpt'] =$r[4];
$_SESSION['sem'] =$r[5];
//var_dump($_SESSION['dpt']);die();
}
?>
</table>
</body>
</html>