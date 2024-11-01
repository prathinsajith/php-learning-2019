<?php 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("customer",$con);
ob_start();
$g=$_SESSION['NAME'];
?>
<html>
<head>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#kj").click(function(){
	$("#yy").show();
	$("#mm").hide();
  });
});
$(document).ready(function(){
  $("#yz").click(function(){
    $("#yy").hide();
  });
});

</script>
<style>
#yy{
display:none;
}
</style>
</head>
<div id="kl" >
<div id="mm">
<body >
<table border="2" >
<tr>
<th>name</th>
<th>address</th>
<th>dob</th>
<th>place</th>
<th>id</th>
<th>EDIT</th>
</tr>
<?php
$f=$_GET['q'];
$y=mysql_query("select * from customerdtls");
while($z=mysql_fetch_array($y))
{

?>
<tr>
<td><?php echo $z[0];?></td>
<td><?php echo $z[1];?></td>
<td><?php echo $z[2];?></td>
<td><?php echo $z[3];?></td>
<td><?php echo $z[4];?></td>
<td id="kj">EDIT</td>
</tr>
<?php
}
?>
</table>
</div>
<div id="yy">
<p >hello world<p>
<h1 align="center">REGISTRATION</h1></th></tr>
<table align="center">:
<form method="post" action="">
<tr><td>name:</td><td><input type="text" name="n1" value=""/></td></tr>
<tr><td>email:</td><td><input type="text" name="n2" value=""/></td></tr>
<tr><td>department:</td><td><input type="text" name="n3" value=""/></td></tr>
<tr><td>semester:</td><td><input type="text" name="n4" value=""/></td></tr>
<tr><td>password</td><td><input type="password" name="n5" value="" /></td></tr>
 <td><input type="submit" id="yz" name="submit" value="submit" align="right"/></td></tr>
</form>
 </table>
</div>
</div>
</body>
</html>