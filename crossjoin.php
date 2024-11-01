<?php 
$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);
?>

<table border="1">
<tr>
<th>ID</th>
<th>Email</th>
<th>Password</th>
<th>Role</th>
<th>id</th>
<th>Log_ID</th>
<th>Name</th>
<th>Email</th>
<th>Department</th>
<th>Semester</th>
<th>Status</th>

<?php 
$s=mysql_query("select * from stud_staff_log cross join  stud_tbl ");

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
<td> <?php echo $r[8];?> </td>
<td> <?php echo $r[9];?> </td>
<td> <?php echo $r[10];?> </td>



</tr>
<?php
}
?>
</table>