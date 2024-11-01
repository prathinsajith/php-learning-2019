<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("matrimony",$con);
?>
<HTML>
<HEAD>
<style>

</style>
<SCRIPT>

</SCRIPT>
</HEAD>
<BODY>
<div id="main">
<h3>Register FREE</h3><br>       
<form action="">
Matrimony Profile for <select name="-select-" >
<option>Myself</option>
<option>son</option>
<option>daughter</option>
<option>brother</option>
<option>sister</option>
<option>relative</option>
<option>friend</option>
</select><br>
Name</br><input type="text"  name="m1" value=""/><br>
Gender</br><input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="other"> Other<br>
Date of Brith <input type="date"><br>

Religion:
<select id="Religion" onchange="getStatesSelectList(this.value)">
	<option disabled selected>Religion</option>
<?php
		$sql =mysql_query("SELECT * FROM religion");
		
		while($r=mysql_fetch_array($sql)){
	?>
	<option value="<?php echo $r['0'] ?>"><?php echo $r['1'] ?></option>
	<?php } ?>
</select><br><br>
Mother tongue:<select id="language" onchange="getStatesSelectList1(this.value)">
	<option disabled selected>language</option>
<?php
		$sql =mysql_query("SELECT * FROM lang");
		
		while($row=mysql_fetch_array($sql)){
	?>
	<option value="<?php echo $row['0'] ?>"><?php echo $row['1'] ?></option>
	<?php } ?>
</select><br>

Caste / Division:<div id="dd">	

<select >
<option value="">--first select religion--</option>
</select>
</div><br>
Country living in: <select id="country-select" onchange="getStatesSelectList2(this.value)">
	<option disabled selected>Please Select Country</option>
	<?php
		$sql =mysql_query("SELECT * FROM country");
		
		while($row=mysql_fetch_array($sql)){
	?>
	<option value="<?php echo $row['0'] ?>"><?php echo $row['1'] ?></option>
	<?php } ?>
</select><br>
phone no :<input type="text"  name="m9" value=""/><br>

Email<input type="email"  name="m10" value=""/><br>
password<input type="password"  name="m11" value=""/><br>
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
	x.open("GET","caste.php?q="+st,true);
	x.send();
}
</script>
</form>

</BODY>
</HTML>