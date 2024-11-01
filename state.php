<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("student",$con);
?>


<html>
<body>

<?php
$s=$_GET['q'];
$a=mysql_query("select * from states where country_id=='$s'");
?>

<form action="">
<select name="us2" onchange="get(this.value)">

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
<div id="cc">	
</div>


</body>
</html>