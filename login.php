<?php
ob_start();
session_start(); 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("college",$con);

?>
<html>
<head>
<style>
body
{
background-color:#FF5733  ;
}

</style>
</head>
<body>
<table align="center">
<form method="post" action="">
<tr><th align="center"><h1 align="center">LOGIN</h1></th></tr>

<tr><td>username:</td><td><input type="text" name="n1" value=""/></td></tr>
<tr><td>password:</td><td><input type="password" name="n2" value=""/></td></tr>
<tr><td><input type="submit" name="submit" value="submit"/></td></tr>
</form>
 </table>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$s=$_POST['n1'];
	$t=$_POST['n2'];
	$lg=mysql_query("select * from login where username='$s' and password='$t'");
	//echo "select * from login where username='$s' and password='$t'";
	if($b=mysql_fetch_array($lg))
	{
			session_regenerate_id (true);
		
	//var_dump($_SESSION["un"]);die();
		if($b['role'=='student'])

	{
		$_SESSION["un"]=$s;
		header("location:studenthome.php");
	}
	elseif($b['role'=='staff'])

	{
		$_SESSION["un"]=$s;
		header("location:staffhome.php");
	}
	}
	else
	{
		echo"invalid username or password";
	}
}
	?>