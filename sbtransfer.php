<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("bank",$con);
ob_start();

?>
<head>
<title> Account Registartion
</title>
<style>
</style>
</head>
<script>

function pp(t,id)
{
var alpha=/^[0-9]+$/;
if(t.value=="")
{
document.getElementById(id).innerHTML="*";
t.focus();
}

else if(!t.value.match(alpha))
{
t.value=="";
document.getElementById(id).innerHTML="invalid number";
t.focus();
}
else
{
   document.getElementById(id).innerHTML="";
}
}

</script>
<script src="val.js"></script>
<body>
<form method="POST" name="form1" action="" onsubmit="" enctype="multipart/form-data">
TRANSATION DATE:<input type="date" name="f0"   value=""/><span id="r23"></span><br>
C TYPE :<input type="text" name="f1"  value="" required onblur="val(this,'r30')" /><span id="r30"></span><br>
DEPOSIT:<input type="text" name="f2"  value="" required onblur="pp(this,'r31')" /><span id="r31"></span><br>
WITHDRAW:<input type="text" name="f3"  value="" required onblur="pp(this,'r32')" /><span id="r32"></span><br>
ACCOUNTHEAD :<input type="text" name="f4"  value="" required onblur="val(this,'r33')" /><span id="r33"></span><br>
STAFF :<input type="text" name="f5"  value="" required onblur="val(this,'r34')" /><span id="r34"></span><br>
REMARK:<input type="text" name="f6"  value=""  onblur="val(this,'r35')" /><span id="r35"></span><br>
STATUS :<input type="text" name="f7"  value="" onblur="val(this,'r36')" /><span id="r36"></span><br>
BALANCE :<input type="TEXT" name="f8"  value="" onblur="pp(this,'r37')" /><span id="r37"></span><br>
<input type="submit" value="submit" name="submit"/>
</form>
</div>
</body>
</html>
 <?php
if(isset($_POST['submit']))
{
    $a=$_POST['fo'];
    $b=$_POST['f1'];
	$c=$_POST['f2'];
	$d=$_POST['f3'];
	$e=$_POST['f4'];
	$f=$_POST['f5'];
	$g=$_POST['f6'];
	$h=$_POST['f7'];
	$i=$_POST['f8'];
	$z=mysql_query("insert into transaction values('','$a','$b','$c','$d','$e','$f','$g','$h','$i','')");
	echo "insert into transaction values('','$a','$b','$c','$d','$e','$f','$g','$h','$i','')";
	if($z)

{
	echo"succesfully inserted";
}
else
	{
	echo"failed";
}
}
   
?>