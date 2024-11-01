<?php 
session_start();
$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);

echo "welcome";
echo "<hr>";
echo $_SESSION['staff'];
?>
<html>
<head>
</head>
<body></br></br>
<a href="depmt.php">department_details</a></br></br>

<a href="stud_details.php">student_details</a>

</body>


</html>
