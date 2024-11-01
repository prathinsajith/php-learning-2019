<html>
<head>
<script src="jquery.min.js"></script>


<script>
$(document).ready(function(){
  $("#kj").click(function(){
    $(".yy").hide(1000);
	   $(".yy").show(1000);
  });
});
</script>
</head>
<body>
<p id="kj">jquery</p>
<p class="yy">jquery</p>
</body>
</html>