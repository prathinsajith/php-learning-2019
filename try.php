<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("student",$con);
?>

<html>

<body>
<form action="">
<select id="country-select" onchange="getStatesSelectList(this.value)">
	<option disabled selected>Please Select Country</option>
	<?php
		$sql =mysql_query("SELECT * FROM countries");
		
		while($row=mysql_fetch_array($sql)){
	?>
	<option value="<?php echo $row['0'] ?>"><?php echo $row['1'] ?></option>
	<?php } ?>
</select>
</form>
<div id="dd">


</div>
<script>
function getStatesSelectList(st)
{ 
	var x=new XMLHttpRequest();
	x.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById('dd').innerHTML=this.responseText;
		}
	};
	x.open("GET","state.php?q="+st,true);
	x.send();
}

function get(ct)
{ 
	var x=new XMLHttpRequest();
	x.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById('cc').innerHTML=this.responseText;
		}
	};
	x.open("GET","cities.php?qs="+ct,true);
	 
	x.send();
}



</script>

</body>
</html>