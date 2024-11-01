

<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("projectcyb",$con);
ob_start();

?>
<!DOCTYPE html>
<head>
<title> Account Registartion
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
table,tr,td{
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<script src="val.js"></script>
<body>

<?php
$dt=date('Y-m-d', strtotime('-18 year'));

?>

<div class="main">

<div id="sub" >
<table div="t1">
<h3>New Registartion</h3>

<table class="t2" width="97%">
<form method="POST" name="form1" action="" onsubmit="return val(this)" enctype="multipart/form-data">
<tr class="row1"><td>name(initial at the end)   :</td><td><input type="text" name="f1" placeholder="name" onblur="val(this,'r1')" value=""/><span id="r1"></span></td></tr>
<tr class="row2"><td> address1 </td><td><textarea name="f2" value="" placeholder="ADDRESS" onblur="val(this,'r2')"></textarea><span id="r2"></span></td></tr>
<tr class="row2"><td> ADDRESS2 </td><td><textarea name="f3" value="" placeholder="ADDRESS" onblur="val(this,'r3')"></textarea><span id="r3"></span></td></tr>

<tr class="row2"><td>religion:</td><td><select name="f4">
<option value="Hindu">Hindu</option>
<option value="Islam">Islam</option>
<option value="Christian">Christian</option>
<option value="Other">Other</option>
<option value="No Religion">No Religion</option>
</select></td></tr>
<tr class="row1"><td>caste   :</td><td><select name="f5">
<option value=""></option>
<option value=""></option>
</select></td></tr>
<tr class="row1"><td>categary :</td><td><input type="text" name="f6" onblur="val(this,'r6')" value=""/><span id="r6"></span></td></tr>

<tr class="row1"><td>SEX   :</td><td><input type="radio" name="gender" value="male"> Male<br>
<input type="radio" name="gender" value="female"> Female<br>
<input type="radio" name="gender" value="other"> Other</td></tr>
<tr class="row1"><td>date of birth[DD/MM/YYYY]   :</td><td><input type="date" name="f7" value="" max="<?php echo $dt?>"/></td></tr>
<tr class="row2"><td>blood group:</td><td><select name="f8">
<option value="A+"> A+</option>
<option value="A-"> A- </option>
<option value="B+"> B+</option>
<option value="B-">B-"></option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+"></option>
<option value="0-">0-</option>
</select></td></tr>


<tr class="row1"><td>OCCUPATION :</td><td><input type="text" name="f9" placeholder="OCCUPATION" onblur="val(this,'r9')" value=""/><span id="r9"></span></td></tr>
<tr class="row1"><td>DISTRICT :</td><td><input type="text" name="f10" placeholder="DISTRICT"  onblur="val(this,'r10')" value=""/><span id="r10"></span></td></tr>
<tr class="row2"><td>VILLAGE   :</td><td><input type="text" name="f11" placeholder="VILLAGE "  onblur="val(this,'r11')" value=""/><span id="r11"></span></</td></tr>
<tr class="row1"><td>WARD   :</td><td><input type="text" name="f12" placeholder="WARD"  onblur="phone(this,'r14',2)" value=""/><span id="r12"></span></</td></tr>
<tr class="row1"><td>CONTACT NO :</td><td><input type="text" name="f13" placeholder="CONTACT NO"  onblur="phone(this,'r14',10)" value=""/><span id="r13"></span></td></tr>
<tr class="row1"><td>MOBILE NO :</td><td><input type="text" name="f14" placeholder="MOBILE NO "  onblur="phone(this,'r14',10)" value=""/><span id="r14"></span></td></tr>
<tr class="row1"><td>OFFICE NO :</td><td><input type="text" name="f15" placeholder="OFFICE NO"  onblur="phone(this,'r14',10)" value=""/><span id="r15"></span></td></tr>
<tr class="row1"><td>email :</td><td><input type="email" name="f16"  value=""/><span id="r16"></span></td></tr>
<tr class="row1"><td>adr :</td><td><input type="text" name="f17" value=""/><span id="r17"></span></td></tr>
<tr class="row1"><td>election id:</td><td><input type="text" name="f18" onblur="phone(this,'r14',16)" value=""/><span id="r18"></span></td></tr>
<tr class="row1"><td>pass no:</td><td><input type="text" name="f19" onblur="phone(this,'r14',16)" value=""/><span id="r19"></span></td></tr>
<tr class="row1"><td>licence no :</td><td><input type="text" name="f20" onblur="phone(this,'r14',16)" value=""/><span id="r20"></span></td></tr>
<tr class="row1"><td>ras no :</td><td><input type="text" name="f21" onblur="phone(this,'r14',16)" value=""/><span id="r1"></span></td></tr>
<tr class="row1"><td>photo :<tr><td><input type="file" name="f22"/></td></tr><span id="r22"></span></td></tr>
<tr class="row1"><td>mdate :</td><td><input type="date" name="f23"  value=""/><span id="r23"></span></td></tr>
<tr class="row1"><td>place :</td><td><input type="text" name="f24" onblur="val(this,'r24')" value=""/><span id="r24"></span></td></tr>
<tr class="row1"><td>landmark :</td><td><input type="text" name="f25" onblur="val(this,'r25')" value=""/><span id="r25"></span></td></tr>
<tr class="row1"><td>post office :</td><td><input type="text" name="f26" onblur="val(this,'r26')" value=""/><span id="r26"></span></td></tr>
<tr class="row1"><td>pin:</td><td><input type="text" name="f27" onblur="phone(this,'r14',6)" value=""/><span id="r27"></span></td></tr>
<tr class="row1"><td>sig:</td><td><input type="text" name="f28" value=""/><span id="r28"></span></td></tr>
<tr><td><input type="submit" value="submit" name="submit"/></td></tr>
</form>
</table>
</div>
</body
</html>
<?php
if(isset($_POST['submit']))
{
$a=$_POST['f1'];
	$b=$_POST['f2'];
	$c=$_POST['f3'];
	$d=$_POST['f4'];
	$e=$_POST['f5'];
	$f=$_POST['f6'];
	$ac=$_POST['gender'];;
	$g=$_POST['f7'];
	$h=$_POST['f8'];
	$i=$_POST['f9'];
	$j=$_POST['f10'];
	$k=$_POST['f11'];
	$l=$_POST['f12'];
	$m=$_POST['f13'];
	$n=$_POST['f14'];
	$o=$_POST['f15'];
	$p=$_POST['f16'];
	$q=$_POST['f17'];
	$r=$_POST['f18'];
	$s=$_POST['f19'];
	$t=$_POST['f20'];
	$u=$_POST['f21'];
	$v=$_FILES['f22']['name'];
	$vtmp=$_FILES['f22']['tmp_name'];
	$tp='pic/'.$v;
	copy($vtmp,$tp);
	$w=$_POST['f23'];
	$x=$_POST['f24'];
	$y=$_POST['f25'];
	$z=$_POST['f26'];
	$aa=$_POST['f27'];
	$ab=$_POST['f28'];
	
$zz=mysql_query("insert into regi values('','$a','$b','$c','$d','$e','$f','$ac','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$tp','$w','$x','$y','$z','$aa','$ab')");
echo "insert into regi values('','$a','$b','$c','$d','$e','$f','$ac','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$tp','$w','$x','$y','$z','$aa','$ab')";


$dateOfBirth = $_POST['f7'];
$today = date("Y-m-d");
$diff = date_diff(date_create($dateOfBirth), date_create($today));

if($diff->format('%y%') < 18){
	die("you are too young to register");
}

if($zz)

{
	echo"succesfully inserted";
}
else
	{
	echo"failed";
}
}
   
?>