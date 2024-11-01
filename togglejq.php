<html>
<head>
<script src="jquery-3.4.1.min.js"></script>
</head>
<body>
<p id="para" >jquery hide </p>
<h1 class="new"> toggle </h1>
<script>
$(document).ready(function(){
	$("#para").click(function(){
		$(".new").toggle();
	});
});


</script>
</body>
</html>