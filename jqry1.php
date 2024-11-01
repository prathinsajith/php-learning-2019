<html>
<script src="jquery-3.4.1.min.js"></script>
<body>
<p id="kj"> hide </p>
<p class="jj">hide me </p>
<script>

$(document).ready(function(){
	$("#kj").click(function() {
		$(".jj").hide(5000);
	});
});

</script>
</body>

</html>