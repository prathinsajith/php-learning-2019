<html>
<head>

<script src="jquery.min.js"></script>
</head>


<body>
<form method="post">
no1:<input type="text" name="t1" id="t1"/>
no2:<input type="text" name="t2" id="t2"/>
<input type="button" name="b1" value="click me" id="b1">
result:<input type="text" name="t3" id="t3"/>
</form>

<script>
$(document).ready(function(){
  $("#b1").click(function(){
   var a= $("#t1").val();
	var b=$("#t2").val();
	var c=eval(a)*eval(b);
	$("#t3").val(c);
  });
});
</script>

</body>
</html>