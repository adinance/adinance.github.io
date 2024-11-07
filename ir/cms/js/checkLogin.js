// JavaScript Document
function checkLogin(){
  username = document.getElementById('username').value;
  password = document.getElementById('password').value;
  
  if(username ==""){
	  alert("Please enter your username.");
	  document.getElementById('username').focus();
	  return false;
  }else  if(username.length < 4){
	  alert("Please enter between 6-10 characters.");
	  document.getElementById('username').focus();
	  return false;
  }else  if(password ==""){
	  alert("Please enter your password.");
	  document.getElementById('password').focus();
	  return false;
  }else  if(password.length < 4){
	  alert("Please enter between 6-10 characters.");
	  document.getElementById('password').focus();
	  return false;
  }
}