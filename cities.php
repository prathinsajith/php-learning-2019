<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("student",$con);
?>


<html>
<body>

<?php
$ss=$_GET['qs']; 

$a=mysql_query("select * from cities where sid='$ss'");
?>

<form action="">
<select name="us2" Onchange="">
<?php
while($b=mysql_fetch_array($a))

{
	?>
	


<option value="<?php echo $b[0];?>"> <?php echo $b[2]; ?> </option>
<?php
}
?>
</select>
</form>	
</body>
</html>