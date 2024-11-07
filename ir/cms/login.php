<?php
include "inc/config_txt.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET?>">
<meta name="description" content="<?php echo$content_description?>" /> 
<meta name="keywords" content="<?php echo $content_keywords?>" /> 
<title><?php echo TITLE?></title>
<link href="css/site.css" rel="stylesheet" type="text/css">
<link href="css/layout-login.css" rel="stylesheet" type="text/css">
<!--[if IE]>
        <link rel="stylesheet" type="text/css" href="css/all-ie-only.css" />
<![endif]-->
<?php include "inc/yui-login.inc.php" ?>
<script type="text/javascript" src="js/checkLogin.js"></script>
<link type="text/css" href="themes/base/ui.all.css" rel="stylesheet" />
<script src="http://code.jquery.com/jquery-1.5.js"></script>
<script type="text/javascript" src="js/jquery.corner.js?v2.11"></script>
<script type="text/javascript" src="ui/ui.core.js"></script>
</head>
<body class=" yui-skin-sam">
<div id="top1"><?php include "header-login.php"; ?></div>
<div id="center1">
<div id="login">
<h1><a href="../index.php" title="">CMO GROUP</a></h1>
<div id="login_error"></div>
<!-- <form name="loginform" id="loginform" action="login_script.php" method="get">
	<p>
		<label>Username<br />
		<input type="text" name="username" id="username" class="login-input"/></label>
	</p>
	<p>
		<label>Password<br />
		<input type="password" name="password" id="password" class="login-input" /></label>
	</p>
	<p class="submit">
        <div style=" font-weight:bold; cursor:pointer;" id="login-button" >Log In</div>
	</p>
</form> -->

<form name="loginform" action="login_script.php" method="get">
	<p>
		<label>Username<br />
		<input type="text" name="username" class="login-input"/></label>
	</p>
	<p>
		<label>Password<br />
		<input type="password" name="password" class="login-input" /></label>
	</p>
	<button type="submit" class="login-button" value="" />Log In</button>
	
</form>
</div>
</div>
<? ?>
<script>

  $().ready(function () {
     $("#login").corner();
	 $("#login-button").corner("7px");
	  $("#login-button").click(function(){
			var username = $('input[name=username]');
		    var password = $('input[name=password]');	
			if (username.val()=="") {
				document.getElementById("login_error").innerHTML = "Please fill in your username.";
				username.focus();
			return false;
			} else document.getElementById("login_error").innerHTML = "";
			
			if (password.val()=="") {
				document.getElementById("login_error").innerHTML = "Please fill in your password.";
				password.focus();
				return false;
			} else document.getElementById("login_error").innerHTML = "";
			
			//organize the data properly
		    var data = 'username=' + username.val() + '&password='  +  password.val();

			//start the ajax
			$.ajax({
				//this is the php file that processes the data and send mail
				url: "login_script.php",	
				//GET method is used
				type: "POST",
				//pass the data			
				data: data,			
				//Do not cache the page
				cache: false,	
				//success
				success: function (html) {				
					//if login_script.php returned 1/true (success)
					//alert(html);
					if (html==1) {					
						window.location = "index.php";
					//if login_script.php returned 0/false (failed)
					} else {
						// $('.login-input').attr('disabled','false');
						alert('Sorry, unexpected error. Please try again later.');
//                                                alert(data);
					}
				}		
			});
		
	  });
  });


(function() {
    var Dom = YAHOO.util.Dom,
        Event = YAHOO.util.Event;

    Event.onDOMReady(function() {
        var layout = new YAHOO.widget.Layout({
            units: [
                { position: 'top', height: 60, body: 'top1',gutter: '1px' },
				{ position: 'bottom', height: 50, resize: false, body: 'bottom1' },
                { position: 'center', body: 'center1',gutter: '1px' }
            ]
        });
        layout.render();
     
       
    });


})();
</script>
</body>
</html>
