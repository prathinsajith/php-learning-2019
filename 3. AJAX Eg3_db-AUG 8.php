<html>
<head>
<title> AJAX example3 - db values</title>
</head>
<body>

<select name="usl" Onchange="showuser(this.value)">
<option value="">select</option>


<?php
include"../JULY 10/connection.php";
$a=mysql_query("select * from state");
while($b=mysql_fetch_array($a))

{	
?>
<option value="<?php echo $b[0];?>"> <?php echo $b[1]; ?> </option>
<?php
}
?>
</select>
<div id="t"> information will list here

</div>
<script>
function showuser(st)
{//alert(st);
	var x=new XMLHttpRequest();
	x.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById('t').innerHTML=this.responseText;
		}
	};
	x.open("GET","state-AUG8.php?q="+st,true);
	x.send();
}
</script>
</body>
</html>