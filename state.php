<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("student",$con);
?>


<html>
<body>

<form action="">
<select name="us2" onchange="get(this.value)">

<?php
$s=$_GET['q'];
$a=mysql_query("select * from state where id='$s'");
while($bl=mysql_fetch_array($a))
	




{ 
	?>
	


<option value="<?php echo $bl[0];?>"> <?php echo $bl[2]; ?> </option>
  
<?php
}
?>
</select>
</form>
<div id="cc">	
</div>


</body>
</html>