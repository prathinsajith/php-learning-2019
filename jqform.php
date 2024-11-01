
<html>
<head>
<script src="jquery-3.4.1.min.js"></script>

</head>

</head>
<body>
<form method="post">
<table>
<tr><td>No1 :</td><td><input type="text" value="" id="t1"/></td></tr>
<tr><td>No2 :</td><td><input type="text" value="" id="t2"/></td></tr>
<tr><td><input type="button" value="submit" name="sub" id="b1"/></td></tr>
<tr><td>result :</td><td><input type="text" value="" id="t3"/></td></tr>

</table>

</form>

<script>
$(document).ready(function(){
	$("#b1").click(function(){
		var a=$("#t1").val();
		var b=$("#t2").val();
		var c=eval(a)*eval(b);
		
		$("#t3").val(c);
	});
});
</script>


</body>
</html>

