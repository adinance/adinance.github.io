<div id="hdr_main">About Us – Important Information on the Company’s Employees</div>
<?
include '../ir/sendmail.php';
?>


<div style="padding:15px; width: 635px; background:#FFFFFF; text-align:left; font-size:14px">
            
          
            <font color="black" > 
            <b>Number of employees as of 31 December 2022</b>
            <br>
            - Total of 407 people; 173 females (42%) and 234 males (58%)
            <br><br>
            <b>Number of disabled employees as of 31 December 2022</b>
            <br>
            - None
            <br><br>
            <b>Turnover rate</b>
            <br>
            - In the year 2022, a total of 79 people (38 females and 41 males)
            <br>
            - In the year 2022, a total of 69 people (32 females and 37 males)
            <br><br>
            <b>Statistical data of accidents during the performance of employees and business partners</b>
            <br>
            - Year 2020-2022, there were no accidents.
            <br><br>
            <b>Statistical data on death from work of employees and business partners in the Company's working area</b>
            <br>
            - Year 2020-2022, there were no deaths.
            <br>
            </font>
<!--             <img src="image/news/contact-text.png" width="236" height="132" /> -->
            </div>
            
<script>
var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
$(document).ready(function(){
$("#submit-btn").click(function(){
	var name = $('#name');
	var email = $('#email');
	var subject = $('#subject');
	var pass = true;
	if(name.val() ==""){
		pass = false;
		alert("Please enter your name.");
		name.focus();
		return false;
	}
	
	if(email.val() ==""){
		pass = false;
		alert("Please enter your email.");
		email.focus();
		return false;
	}
	
	if(!(email.val().match(emailExp))){
		pass = false;
		alert("Please enter a valid email.");
		email.focus();
		return false;
	}
	
	if(subject.val() ==""){
		pass = false;
		alert("Please enter your subject.");
		subject.focus();
		return false;
	}
	
	if(pass==true){
		// send
		alert("Sending Message...");
	}
});

});
</script>