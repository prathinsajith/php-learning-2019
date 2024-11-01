<html>
<head>
<script src="jquery-3.4.1.min.js"></script>
 <style>
 
 #b1{
	 
	 height:20px
	 width:30px;
	 padding:10px;
	 margin:3px;
	 border:1px solid blue;
	 background-color:red;
 }
 
 
 
 
 
 #b2{
	 
	 
	 height:20px
	 width:30px;
	 padding:10px;
	 margin:3px;
	 border:1px solid blue;
	 background-color:red;
 }
 
 #b3{
	 
	
	 height:20px
	 width:30px;
	 padding:10px;
	 margin:3px;
	 border:1px solid blue;
	 background-color:red; 
 }
 
 </style>

<script>

$(document).ready(function(){
	$("#b1").click(function(){
	$("#b1").animate({height:'72px'},500);
});
    $("#b2").click(function(){
	$("body").css("background-color","blue");
});
   $("#b3").click(function(){
   $("body").css("background-color","green");
});
});

</script>





</head>
<body>
<div id="b1">red</div>
<div id="b2">blue</div>
<div id="b3">green</div>
</body>


</html>