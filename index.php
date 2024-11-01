<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("student",$con);
?>


<html>
<body>
<select id="country-select">
	<option disabled selected>Please Select Country</option>
	<?php
		$sql =mysql_query("SELECT * FROM countries");
		
		while($row=mysql_fetch_array($sql)){
	?>
	<option value="<?php echo $row['id'] ?>"><?php echo $row['cntr'] ?></option>
	<?php } ?>
</select>
</body>
</html>