<?php 
ob_start();

$con=mysql_connect("localhost","root","");
$a=mysql_select_db("student",$con);
?>
<html>
<head>
</head>
<body>
<form  enctype="multipart/form-data" method="post" action="">
<input type="file" name="f1" value="" />
</br></br>
<input type="submit" value="submit" name="sub"/>
</form>
</body>
</html>
<?php 
 if(isset($_POST['sub']))
 {
	 $p=$_FILES['f1']['name'];
	 $ptmp=$_FILES['f1']['tmp_name'];
	 $tp='pic/'.$p;
	 copy($ptmp,$tp);
	 $im =mysql_query("insert into img values ('','$tp')");
  
	 echo "succesfully inserted";
}
 $lg=mysql_query("select * from img");
 while($r=mysql_fetch_array($lg))
 {
  echo "<img src ='$r[1]' width='50' height='50'>";
  ?>
  <a href ="download.php?file=<?php echo $r[1]?>">download</a> 

<?php
}
?>