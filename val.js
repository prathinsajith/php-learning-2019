var alpha=/^[a-zA-Z ]+$/;
if(t.value=="")
{
document.getElementById(id).innerHTML="*";
t.focus();

}
else if(!(t.value.match(alpha)))
{
document.getElementById(id).innerHTML="invalid charecter";
t.value=="";
t.focus();


}
else{

document.getElementById(id).innerHTML="";
}
}


function phone(t,id,n)
{
var alpha=/^[0-9]+$/;
if(t.value=="")
{
document.getElementById(id).innerHTML="*";
t.focus();
}
document.getElementById(id).innerHTML="invalid number";
else if(!t.value.match(alpha))
{
t.value=="";
t.focus();
}
else if(!(t.value.length==n))
{
document.getElementById(id).innerHTML="enter "+n +" digit number";
t.focus();
}
else
{
   document.getElementById(id).innerHTML="";
}
}
