
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("psc",$con);
ob_start();

?>
<!DOCTYPE html>
<head>
<title>kerala public service commision
</title>
<style>
body {background-color:#D3D3D3;}
.main
{
  border: 1px solid black;
  margin-right: 150px;
  margin-left: 100px;
  background-color:#2a88c5;

}
.row1
{
background-color:#DDD;
}
.row2
{
background-color:#EEE;
width:100%;

}
#t1
{
border-top: 1px solid grey;
border-left: 1px solid grey;
border-right: 1px solid grey;
border-bottom: 1px solid grey;
background-color:blue;
margin-left:11px;
}
.t2
{
width=100%;
margin-left:11px;
margin-top:20px;
border-top: 1px solid grey;
border-left: 1px solid grey;
border-right: 1px solid grey;
border-bottom: 1px solid grey;
}
input[type=text]
{
border-radius:20%;
}
h3
{
color:#9ACD32;
}
span{color:red;}
input
{
width:250px;
height:20px;
}
select
{
width:250px;
height:20px;
}
#ff
{
background-color:#4B00F5;
border-radius:20%;
color:white;
width:100px;
height:28px;
margin-left:590px;
}
</style>
</head>
<script src="val.js"></script>
<body>

<div class="main">

<div id="sub" ><img src="C.PNG">
<table div="t1">
<tr><td><h3>New Registartion</h3></td></tr>

<table class="t2" width="97%">
<form method="POST" name="form1" action="" onsubmit="return val(this)" enctype="multipart/form-data">

<tr class="row1"><td>name(initial at the end)   :</td><td><input type="text" name="f1" onblur="val(this,'r1')" value=""/><span id="r1"></span></td></tr>
<tr class="row2"><td>   </td><td>please enter your name once again!</br><input type="text" name="f2" value="" onblur="val(this,'r2')"/><span id="r2"></span></td></tr>
<tr class="row1"><td>date of birth[DD/MM/YYYY]   :</td><td><input type="date" name="f3" value=""/></td></tr>
<tr class="row2"><td>   </td><td>please enter your date of birth once again</br><input type="date" name="f4" value=""/></td></tr>
<tr class="row1"><td>gender   :</td><td><select name="f5">
<option value="male">male</option>
<option value="female">female</option>
</select></td></tr>
<tr class="row2"><td>father's name   :</td><td><input type="text" name="f6"  onblur="val(this,'r6')" value=""/><span id="r6"></span></</td></tr>
<tr class="row1"><td>mother's name   :</td><td><input type="text" name="f7"  onblur="val(this,'r7')" value=""/><span id="r7"></span></</td></tr>
<tr class="row2"><td>religion   ::</td><td><select name="f8">
<option value="Hindu">Hindu</option>
<option value="Islam">Islam</option>
<option value="Christian">Christian</option>
<option value="Other">Other</option>
<option value="No Religion">No Religion</option>

</select></td></tr>
<tr class="row1"><td>caste   :</td><td><select name="f9">
<option value=""></option>
<option value=""></option>
</select></td></tr>
<tr class="row2"><td>sub caste   :</td><td><select name="f10">
<option value=""></option>
<option value=""></option>
</select></td></tr>
<tr class="row1"><td>reservation group(as per curent norms)   :</td><td><input type="text" name="f11" value=""/></td></tr>
<tr class="row2"><td>ID proof   :</td><td><select name="f10">
<option value="Driving Licence">Driving Licence</option>
<option value="Election ID">Election ID</option>
<option value="PAN Card">PAN Card</option>
</select></td></tr>
<tr class="row1"><td>ID proof details   :</td><td><input type="text" name="f13" onblur="phone(this,'r13',12)" value=""/><span id="r13"></span></td></tr>
<tr class="row2"><td>aadhaar number,if available   :</td><td><input type="text" name="f14" onblur="phone(this,'r14',16)" value=""/><span id="r14"></span></td></tr>
<tr class="row1">

</table>
<tr><td><h3>USER ID & PASSWORD</h3></td></tr>
<table class="t2" width="97%">

<tr class="row1"><td>User ID(without spaces)<br/>(please remember the user ID)  :</td><td><input type="text" name="f16" value=""/></td></tr>
<tr class="row1"><td>Confirm User Id   :</td><td><input type="text" name="f17" value=""/></td></tr>
<tr class="row2"><td>password   :</td><td><input type="password" name="f18" onblur="pass(this,'r18')" value=""/><span id="r18"></span></td></tr>
<tr class="row2"><td>confirm password   :</td><td><input type="password" name="f19" onblur="pass(this,'r19')" value=""/><span id="r19"></span></td></tr>

</table>
<tr><td><h3>Declaration</h3></td></tr>
<table class="t2" width="97%">


<tr class="row1"><td>Access code  :</td><td><input type="text" name="f20" value=""/></td></tr>
<tr class="row1"><td>  </td><td><input type="text" name="f21" value=""/></td></tr>
<tr class="row2"><td colspan="2"><input type="checkbox" name="f22" value=""/>I do here by declare that the above information is correct and complete to the best of my knowledge and belief</td></tr>
<tr class="row2"><td colspan="2"><input type="submit" id="ff" name="sub" value="register"/><td></tr>
<tr class="row2"><td colspan="2"><input type="file" name="f21"/><td></tr>
<tr class="row2"><td colspan="2"><input type="submit" name="sub"/><td></tr>
</table>
</form>
</table>
</div>
</body>
</html>
<?php
if(isset($_POST['sub']))
{
$a=$_POST['f1'];
	$b=$_POST['f2'];
	$c=$_POST['f3'];
	$d=$_POST['f4'];
	$e=$_POST['f5'];
	$f=$_POST['f6'];
	$g=$_POST['f7'];
	$h=$_POST['f8'];
	$i=$_POST['f9'];
	$j=$_POST['f10'];
	$k=$_POST['f11'];
	$l=$_POST['f12'];
	$m=$_POST['f13'];
	$n=$_POST['f14'];
	$p=$_POST['f16'];
	$q=$_POST['f17'];
	$r=$_POST['f18'];
	$s=$_POST['f19'];
	$t=$_POST['f20'];
	$o=$_FILES['f21']['name'];
	$otmp=$_FILES['f21']['tmp_name'];
	$tp='pic/'.$p;
	copy($ptmp,$tp);
	
$u=mysql_query("insert into reg_form values('','$a','$c','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$p','$r','$tp')");
echo "insert into reg_form values('','$a','$c','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$p','$r','$tp')";
if($u)

{
	echo"succesfully inserted";
}
else
	{
	echo"failed";
}
}
?>
