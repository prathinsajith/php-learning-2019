<html>
<head>

<script src="jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("#b").click(function(){
   $(this).attr("style","color:yellow;background:red");
  });
});
</script>
</head>
<body>
<p id="b">click</p>
</body>
</html>