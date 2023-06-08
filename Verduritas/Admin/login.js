var attempt = 3;
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "verduritas" && password == "demo"){
alert ("Logueo exitoso");
window.location = "index2.html";
return false;
}
else{
attempt --;
alert("Usted tiene "+attempt+" intentos;");
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}