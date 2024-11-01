<html>
<head>
<script src="jquery-3.4.1.min.js"></script>

<style>
.me {

display:none;

}
</style

</head>

<body>
<p id="p" >daniya </p>
<h1 class="me"> raju </h1>
<script>
$(document).ready(function(){
	$("#p").click(function(){
		$(".me").slideDown("slow");
	});
});


</script>
</body>
</html>


