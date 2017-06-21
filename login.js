
function check1()
{
var uname = document.getElementById('name').value;
var pass = document.getElementById('pass').value;;
  
if (uname=="")
{
 alert("Not A Valid Name");
}
else if(pass=="")
{alert("Password Mandatory");return false;}

}
