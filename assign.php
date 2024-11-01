<?php 
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("student",$con);
?>

<html>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
<body>
<form action=""> 
<select name="name" onchange="showdetails(this.value)">
<?php
$y=mysql_query("select name from stud_tbl");
while($z=mysql_fetch_array($y))
{
?>
<option value="<?php echo $z[0];?>"><?php echo $z[0];?></option>
<?php
}
?>
</select>
</form>
<div id="txtHint">
<script>
function showdetails(str)
{
  var xhttp;
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "get.php?q="+str, true);
  xhttp.send();
}
</script>
</div>
</body>
</html>
