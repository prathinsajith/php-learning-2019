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
$s=mysql_query("select * from stud_staff_log left join stud_tbl on stud_staff_log.id = stud_tbl.logid ");

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


<?php 

 
$createtbl = mysql_query(" create table ddltbl (
     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
     name VARCHAR( 25 ) NOT NULL ,
     address VARCHAR( 25 ) NOT NULL ,
     email VARCHAR( 25 ) NOT NULL 
     )");


$altertbl = mysql_query("alter table ddltbl ADD COLUMN username varchar(25) not null");

$altertbl2 = mysql_query("ALTER TABLE ddltbl DROP COLUMN address");


?>

