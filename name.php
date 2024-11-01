<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("keralamatri",$con);
?>


<html>
<body>

<form action="">
<table>
<tr><td>
<select name="us2" onchange="get(this.value)">

<?php
$s=$_GET['q'];
$ss=mysql_query("SELECT * FROM for");
		while($bl=mysql_fetch_array($ss))
	{ 
	?>
	
<option value="<?php echo $bl[0];?>"> <?php echo $bl[1]; ?> </option>
  
<?php
}
?>
</td><tr>
</select>
</form>

</body>
</html>