<?php 
session_start();
$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);

echo "welcome";
echo "<br>";
echo $_SESSION['student'];
echo "<br>";echo "<br>";
?>


<html>
<head>
</head>
<body></br></br>
<a href="logout.php">logout</a></br></br>
<a href="changepsw.php">change_password</a></br></br>
</body>


</html>


