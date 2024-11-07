// JavaScript Document
function checkChangePwd(){
  password = document.getElementById('password').value;
  cpassword = document.getElementById('cpassword').value;
  if(password ==""){
	  alert("Please enter your password.");
	  document.getElementById('password').focus();
	  return false;
  }else  if(password.length < 4){
	  alert("Please enter between 4-10 characters.");
	  document.getElementById('password').focus();
	  return false;
  }else  if(cpassword ==""){
	  alert("Please re-enter your password.");
	  document.getElementById('cpassword').focus();
	  return false;
  }else  if(password != cpassword){
	  alert("Password does not match.");
	  document.getElementById('cpassword').value = "";
	  document.getElementById('cpassword').focus();
	  return false;
  }
}