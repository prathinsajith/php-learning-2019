<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("keralamatri",$con);
?>

<?php
$ss=$_GET['qq'];
$a=mysql_query("SELECT * FROM `cast` where`relid` ='$ss' ");
//echo "SELECT * FROM `cast` where`relid` ='$ss'";

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
