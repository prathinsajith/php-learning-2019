<html>
<head>
<script src="jquery-3.4.1.min.js"></script>
<script>

$(document).ready(function(){
	$("p").click(function(){
		var a=$(this).html();
		$("h1").html(a);
	});
});

</script>
</head>
<body>

<p>hello dani</p>
<p>hai dinu</p>
<p> bye anu </p>
<h1></h1>
</body>

</html>