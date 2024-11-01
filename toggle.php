<html>
<head>
<script src="jquery.min.js"></script>


<script>
$(document).ready(function(){
  $("#kj").click(function(){
    $(".yy").hide(1000);
	 $(".yz").toggle(3000);
  });
});
</script>
</head>
<body>
<p class="yy">jquery hide</p>
<p id="kj">jquery </p>
<p class="yz">jquery toggle</p>
</body>
</html>