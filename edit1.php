
<?php
ob_start();
 
$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);
?>

<?php
if(isset($_REQUEST['id']))
{
$a=$_GET['id'];
$s=mysql_query("select * from user1 where id='$a'");
while($r=mysql_fetch_array($s))
{
?>

<html>
<head>
</head>
<body>
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

<?php
} 
}
?>


</body>
</html>

<?php
if(isset($_POST['up']))
{

$n=$_POST['n1'];
$d=$_POST['n2'];
$g=$_POST['n3'];
$s=$_POST['n4'];
$e=$_POST['n5'];
$p=$_POST['n6'];

$up=mysql_query("update user1 set name='$n', Address='$d', gender='$g', state='$s', email='$e', psw='$p' where id='$a'");

if($up)
{
header("location:edit.php");
}
else
{
echo "failed";
}
}
?>

