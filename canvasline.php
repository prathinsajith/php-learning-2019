<html>
<head>
</head>
<body>
<canvas id="mycanvas" width="300" height="250" style="border:1px solid #FF0000"> rectangle </canvas>

<script>
var cns=document.getElementById("mycanvas");
var dx=cns.getContext("2d");
dx.moveTo(0,0);
dx.lineTo(200,100);
dx.stroke();
</script>
</body>
</html


