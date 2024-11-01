<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("matrimony",$con);
?>

<?php
$s=$_GET['q'];
$a=mysql_query("SELECT * FROM `caste` where`r.id` ='$s' ");
//echo"select * from caste where r.id='$s'";
?>

<select name="caste" onchange="get(this.value)">
<option disabled selected>--first select religion--</option>
<?php
while($b=mysql_fetch_array($a))

{ 
	//echo "safrsdef";
	?>
	


<option value="<?php echo $b[0];?>"> <?php echo $b[2]; ?> </option>
  
<?php
}
?>
</select>
