<html>
<head>
</head>
<body>
<canvas id="mycanvas" width="300" height="250" style="border:1px solid #FF0000"> rectangle </canvas>

<script>
var cns=document.getElementById("mycanvas");
var dx=cns.getContext("2d");
dx.beginPath();
dx.arc(95,50,40,0,2*Math.PI);
dx.stroke();
</script>
</body>
</html