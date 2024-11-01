<html>
<head>
<script src="jquery-3.4.1.min.js"></script>
</head>
<body>
<form method="post">
<table>
<tr><td>No1 :</td><td><input type="text" value="" id="fn"/></td></tr>
<tr><td>No2 :</td><td><input type="text" value="" id="sn"/></td></tr>
<tr><td><input type="button" value="submit" onclick="add()" /></td></tr>
<tr><td>result :</td><td><input type="text" value="" id="ans"/></td></tr>
</table>
</form>
</body>
<script>
function add(){

var a,b,c;
a=Number(document.getElementById("fn").value);

b=Number(document.getElementById("sn").value);
c=a+b;
document.getElementById("ans").value=c;
}

</script>

</html>