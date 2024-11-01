<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("student",$con);
?>

<html>
<head>
</head>
<body>
<table border="2">
<tr>
<th>id</th>
<th>logid</th>
<th>name</th>
<th>email</th>
<th>dptm</th>
<th>sem</th>
<th>status</th>
</tr>
<?php

$a=$_GET['q'];
//var_dump($a);die();
$y=mysql_query("select * from stud_tbl where name ='$a'");
while($z=mysql_fetch_array($y))
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

</body>
</html>