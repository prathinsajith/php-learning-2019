<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("keralamatri",$con);
ob_start();

?>
<!DOCTYPE html>
<head>
<title>kerala matrimony
</title>
<style>
body {background-color:#D3D3D3;}
.main
{
  border: 1px solid black;
  margin-right: 150px;
  margin-left: 100px;
  background-color:#2a88c5;

}
.row1
{
background-color:#DDD;
}
.row2
{
background-color:#EEE;
width:100%;

}
#t1
{
border-top: 1px solid grey;
border-left: 1px solid grey;
border-right: 1px solid grey;
border-bottom: 1px solid grey;
background-color:blue;
margin-left:11px;
}
.t2
{
width=100%;
margin-left:11px;
margin-top:20px;
border-top: 1px solid grey;
border-left: 1px solid grey;
border-right: 1px solid grey;
border-bottom: 1px solid grey;
}
input[type=text]
{
border-radius:20%;
}
h3
{
color:#9ACD32;
}
span{color:red;}
input
{
width:250px;
height:20px;
}
select
{
width:250px;
height:20px;
}
#ff
{
background-color:#4B00F5;
border-radius:20%;
color:white;
width:100px;
height:28px;
margin-left:590px;
}

</style>
</head>
<body>

<?php
$dt=date('Y-m-d', strtotime('-18 year'));

?>

<div class="main">

<div id="sub" ><img src="1.jpg">
<table div="t1">
<tr><td><h3>New Registartion</h3></td></tr>

<table class="t2" width="97%">
<form method="POST" name="form1" action="" >

<tr class="row2"><td>matrimony profile for ::</td><td><select name="f1" onchange="name(this.value)">
<?php
		$sql =mysql_query("SELECT * FROM for");
		
		while($row=mysql_fetch_array($sql)){
	?>
<option value="<?php echo $row['0'] ?>"><?php echo $row['1'] ?>"</option>
		<?php 
		}
		?>
</select></td></tr>

<tr class="row2"><td><select id="s2" onchange="">
<?php
        $s=$_GET['q'];
		$sql =mysql_query("SELECT * FROM name where fid='$s'");
		
		while($row=mysql_fetch_array($sql)){
	?>

<option value="<?php echo $row['0'] ?>"><?php echo $row['1'] ?>"</option>
		<?php 
		}
		?>
</select></td><td><input type="text" name="f2" value=""/></td></tr>

<tr class="row1"><td>Gender   :</td><td><select name="f3">
<option value="male">male</option>
<option value="female">female</option>
</select></td></tr>

<tr class="row1"><td>Date of Birth[DD/MM/YYYY]   :</td><td><input type="date" name="f3" value="" max="<?php echo $dt?>"/></td></tr>


<tr class="row2"><td>Religion </td><td><select name="f1" onchange="name(this.value)">
<?php
		$sql =mysql_query("SELECT * FROM for");
		
		while($row=mysql_fetch_array($sql)){
	?>
<option value="<?php echo $row['0'] ?>"><?php echo $row['1'] ?>"</option>
		<?php 
		}
		?>
</select></td></tr>






<script>
function name(st)
{ 
	var x=new XMLHttpRequest();
	x.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById('dd').innerHTML=this.responseText;
		}
	};
	x.open("GET","keralamatri.php?q="+st,true);
	x.send();
}














</body>
</html>