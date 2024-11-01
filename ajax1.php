<body>
<div id="dd">
<h1>anju0</h1></div>
<button type="text" onClick="loadDOC()">change</button>
<div id="dd">
<script>
function loadDOC()
{
 var x = new XMLHttpRequest();
x.onreadystatechange=function()
{
if (this.readyState == 4 && this.status == 200) 
{document.getElementById("dd").innerHTML = this.responseText;
}
}
x.open("GET","ddd.php",true);
x.send();
}
</script>
</div>
</body>