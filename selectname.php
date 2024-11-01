<?php 
$con=mysqli_connect("localhost","root","","mydata");
ob_start();
session_start();
$g=$_SESSION['mcode'];
?>
<html>
<body>
<table border=1>
<tr>
<th>ID</th>
<th>LOGID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>DEPT</th>
<th>SEM</th>
<th>UID</th>
</tr>
<?php
$f=$_GET['q'];
$y=mysqli_query($con,"select * from student where name='$f'");
//echo"select * from student where name='$f'";
while($z=mysqli_fetch_array($y))
{

?>
<tr>
<td><?php echo $z[0];?></td>
<td><?php echo $z[1];?></td>
<td><?php echo $z[2];?></td>
<td><?php echo $z[3];?></td>
<td><?php echo $z[4];?></td>
<td><?php echo $z[5];?></td>
<td><?php echo $z[6];?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>