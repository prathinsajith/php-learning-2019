<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("student",$con);
?>


<html>
<body>

<?php
$s=$_GET['q'];// var_dump($s);die();
$a=mysql_query("select * from state where id='$s'");
?>


<select name="us2" Onchange="">
<?php
while($b=mysql_fetch_array($a))

{
	//var_dump($b);die();
?>
	


<option value="<?php echo $b[0];?>"> <?php echo $b[2]; ?> </option>
<?php
}
?>
</select>	
</body>
</html>