<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("keralamatri",$con);
?>


<html>
<body>

<form action="">
<select name="us2" onchange="get(this.value)">

<?php
$sb=$_GET['rr'];
$ss=mysql_query("SELECT * FROM name where relid='$sb'");
		while($bl=mysql_fetch_array($ss))
	{ 
	?>
	
<option value="<?php echo $bl[0];?>"> <?php echo $bl[2]; ?> </option>
  
<?php
}
?>
</select>
</form>

</body>
</html>