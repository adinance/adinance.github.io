// JavaScript Document
var ajax = new Array();
function checkUpdate(){
  var uname = document.getElementById('uname');
  var username = document.getElementById('username');
  var olduser = document.getElementById('olduser');
  if(uname.value ==""){
	  alert("Please enter your name.");
	  uname.focus();
	  return false;
  }else if(uname.value =="administrator"){
	  alert("Username not allowed.");
	  uname.focus();
	  return false;
  }else if((username.value =="") && (username.value != olduser.value)){
	  alert("Please enter your user name.");
	  username.focus();
	  return false;
  }else if((username.value.length<8) && (username.value != olduser.value)){
	  alert("Please enter less than 8 characters.");
	  username.focus();
	  return false;
  }else{
        var index = ajax.length;
		ajax[index] = new sack();
		ajax[index].setVar('username',username.value);
		ajax[index].method = "POST";
		ajax[index].requestFile = 'check_user_script.php';	
		ajax[index].onCompletion = function(){
			if (this.response =="1") {					
				return true;
			} else {
 				return false;
            }
	    };	
    ajax[index].runAJAX(); 
  }
  
}