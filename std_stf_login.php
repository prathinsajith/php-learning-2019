<?php 
ob_start();
session_start();
$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);
?>
<html>
<head>
</head>
<body>
<form method="post">
<table>
<tr><td>Email:</td><td><input type="text" name="f1" value=""/></td></tr>
<tr><td>Password:</td><td><input type="password" name="f2" value=""/></td></tr>
<tr><td><input type="submit" value="submit" name="sub"/></td></tr>
</table>

</form>

</body>
</html>
<?php 
if(isset($_POST['sub']))
{
	
	$u=$_POST['f1'];
	$p=$_POST['f2'];
 $lg=mysql_query("select * from stud_staff_log where email='$u' and psw='$p'");
 if($r=mysql_fetch_array($lg))
 {    
 if($r['role']=='student')
 {   
    $n1=mysql_query("select * from stud_tbl where email='$u'");
	$n2=mysql_fetch_array($n1);
	$n=$n2[2];//var_dump($n);die();
	$_SESSION['student'] =$n;
	header("location:student.php");
	 
 }
 else if ($r['role']=='staff')
 {
	$_SESSION['staff'] =$u;
	header("location:staff.php");
	  
 }
 }
else
 {
	
	 echo "invalid";
 }

}
?>