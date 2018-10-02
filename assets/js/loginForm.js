function validate()
{
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "test" && password == "test"){
alert ("Login successful");
window.location = "success.html"; // Redirecting to other page.
return false;
}
else
{
	alert("Login Failed!");
}
}


