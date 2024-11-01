<?php 
$con=mysql_connect("localhost","root","","mydata");
ob_start();
session_start();
?>
<html>
<head>
<script>
function showstud(str) {
		
    if (str == "") {alert("hello");
        document.getElementById('stud').innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            
            xmlhttp = new XMLHttpRequest();
        } else {
           
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
	
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('stud').innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","selectname.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<form>
name:<select name="users" onchange="showstud(this.value)">
<?php
/*$y=mysql_query("select * from student");
while($z=mysql_fetch_array($y))
{
	?>
<option value="<?php echo $z[2];?>"><?php echo $z[2];?></option>
<?php
}*/
$con=mysqli_connect("localhost","root","","mydata");
$g=mysqli_query($con,"select * from student");
while($r=mysqli_fetch_array($g))
{
?>
<option value=<?php echo $r[2];?>><?php echo $r[2];?></option>
<?php
}
$_SESSION['name']=$r[2];
?>
</select>
</form>
<div id="stud"><b>Person info will be listed here...</b></div>
</body>
</html>