<html>
<head>
<style>
.yy{
display:none;
}
#nn{
display:none;
}


</style>
<script src="jquery.min.js"></script>


<script>
$(document).ready(function(){
  $(".yu").click(function(){
	  $("#kj").slideDown();
	
  });
});
$(document).ready(function(){
  $(".yz").click(function(){
   $("#kj").slideUp();

	

  });
});$(document).ready(function(){
  $("#mm").click(function(){
   
	$("#nn").slideToggle("slow");

  });
});

</script>
</head>
<body>
<p id="kj">jquery</p>
<p class="yy">jquery fadeIn</p>
<button class="yz">slideUp</button>
<button class="yu">slideDown</button>
<p id="mm"><a href="jqsinp.php" id="nn"> click me<p>
<h1 ><a href="jqsinp.php">click</a></h1>
</body>
</html>