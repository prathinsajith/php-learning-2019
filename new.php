

<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("psc",$con);
ob_start();

?>
<html>
<head>
</head>
<body>
<form method="POST" name="form1" action="">
<select name = "month">
	<option>Month</option>
	<?php
		for($month = 1; $month <= 12; $month++)
		echo"<option value = '".$month."'>".$month."</option>";
	?>
</select>
<select name = "day">
        <option>Day</option>
        <?php
	        for($day = 1; $day <= 31; $day++){
		       echo "<option value = '".$day."'>".$day."</option>";
		}
	?>
</select>
<select name = "year">
	<option>Year</option>
	<?php
		$y = date("Y", strtotime("+8 HOURS"));
		for($year = 1950; $y >= $year; $y--){
			echo "<option value = '".$y."'>".$y."</option>";
		}
	?>
</select>
</form>

</body>
</html>