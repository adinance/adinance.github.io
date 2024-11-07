// JavaScript Document
function checkReg(){
  name = document.getElementById('name').value;
  username = document.getElementById('username').value;
  password = document.getElementById('password').value;
  cpassword = document.getElementById('cpassword').value;
  if(name ==""){
	  alert("Please enter your name.");
	  document.getElementById('name').focus();
	  return false;
  }else  if(username ==""){
	  alert("Please enter a username between 8 and 15 characters.");
	  document.getElementById('username').focus();
	  return false;
  }else if(username =="administrator"){
	  alert("Username not allowed.");
	  document.getElementById('username').focus();
	  return false;
  }else  if(username.length < 8 || username.length >15){
	  alert("Please enter a username between 8 and 18 characters.");
	  document.getElementById('username').focus();
	  return false;
  }else  if(password ==""){
	  alert("Please enter your password");
	  document.getElementById('password').focus();
	  return false;
  }else  if(password.length < 4){
	  alert("The password must require a minimum of 4 characters.");
	  document.getElementById('password').focus();
	  return false;
  }else  if(cpassword ==""){
	  alert("Please re-enter password.");
	  document.getElementById('cpassword').focus();
	  return false;
  }else  if(password != cpassword){
	  alert("Password does not match,lease re-enter password correctly");
	  document.getElementById('cpassword').value = "";
	  document.getElementById('cpassword').focus();
	  return false;
  }
}