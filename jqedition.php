<?php 
$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);
?>
<html>

<head>
<script src="jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
 $("#id3").click(function(){
	 $("#id1").hide();
	 $("#id2").show();
 });
});
</script>


<style>
#id2{
	
	display:none;
}
</style>
</head>
<body>


<div id="id1">
<table border="1">
<tr>
<th>id</th>
<th>name</th>
<th>address</th>
<th>gender</th>
<th>state</th>
<th>email</th>
<th>psw</th>

<?php 
$s=mysql_query("select * from user1");
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

<td> <a href="delete.php ?id=<?php echo $r[0];?>">delete </a> </td>
<td> <div id="id3"> edit </div> </td>


</tr>
<?php
}
?>
</table>
</div>

<div id="id2">
<p>hai</p> 


<form method="post">
<table>
<tr><td>Name:</td><td><input type="text" name="n1" value="<?php echo $r['name']; ?>"/></td></tr>
<tr><td>Address:</td><td><textarea cols="10" rows="5" name="n2" value=""><?php echo $r['Address']; ?></textarea></td></tr>
<tr><td>Gender:</td><td><input type="radio" name="n3" value="" <?php if($r['gender']=='male') echo "checked='checked'"; ?>/>Male 
                        <input type="radio" name="n3" value="" <?php if($r['gender']=='female') echo "checked='checked'"; ?>/>Female </td></tr>
<tr><td>state:</td><td><select name="n4" >
  <option value="kerala"<?php if($r['state']=='kerala') echo "selected='selected'"; ?>>Kerala</option>
  <option value="tamilnadu"<?php if($r['state']=='tamilnadu') echo "selected='selected'"; ?>>Tamilnadu</option>
 </select></td></tr>
<tr><td>Email:</td><td><input type="text" name="n5" value="<?php echo $r['email']; ?>"/></td></tr>
<tr><td>Password:</td><td><input type="password" name="n6" value="<?php echo $r['psw']; ?>"/></td></tr>
<tr><td><input type="submit" value="submit" name="up"/></td></tr>
</table>
</form>


</div>
</body>
</html>