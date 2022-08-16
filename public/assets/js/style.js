
   function check(){
    // alert('hy');exit;
    var uname = document.getElementById("uname").value;
    if (uname == "") {
      document.getElementById('error1').innerHTML=" *Username cannot be empty"
  }else if(uname.length<5){
      document.getElementById('error1').innerHTML="*Length of first name is too short"
  }else{
    document.getElementById('error1').innerHTML=""
}
var fname = document.getElementById("fname").value;
if (fname == "") {
  document.getElementById('error2').innerHTML=" *Username cannot be empty"
}else if(fname.length<5){
  document.getElementById('error2').innerHTML="*Length of first name is too short"
}else{
    document.getElementById('error2').innerHTML=""
}
var lname = document.getElementById("lname").value;
if (lname == "") {
  document.getElementById('error3').innerHTML=" *Username cannot be empty"
}else if(lname.length<5){
  document.getElementById('error3').innerHTML="*Length of first name is too short"
}else{
    document.getElementById('error3').innerHTML=""
}
var email = document.getElementById("email").value;

if (email == "") {
  document.getElementById('error4').innerHTML=" *email cannot be empty"
}else if(email.length<1){
  document.getElementById('error4').innerHTML="*Length of first name is too short"
}else{
    document.getElementById('error4').innerHTML=""
}
var password = document.getElementById("password").value;
if (password == "") {
  document.getElementById('error5').innerHTML=" *Username cannot be empty"
}else if(password.length<5){
  document.getElementById('error5').innerHTML="*Length of first name is too short"
}else{
    document.getElementById('error5').innerHTML=""
}

return false;
}

