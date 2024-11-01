<html>
<head>

<script src="jquery.min.js"></script>
<style>
#b
{
	margin-left:70px;

}
input[type=text], select {
  width: 10%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
</head>


<body>
<form >
<b>Number 1 :</b><input type="text" name="t1" id="t1"/><br>
<b>Number 2 :</b><input type="text" name="t2" id="t2"/><br>
<input type="button" id="b" value="click me"  onclick="add()"/><br>
<b>Result :</b><input type="text" name="t3" id="t3"/>
</form>

<script>
function add()
{
 var a,b,c;
 a=Number(document.getElementById("t1").value);
  b=Number(document.getElementById("t2").value);
  c=a+b;
  document.getElementById("t3").value=c;
  }
  $(document).ready(function(){
  $("#b").click(function(){
   $(this).attr("style","color:white;background:#e91e63");
  });
});
</script>

</body>
</html>