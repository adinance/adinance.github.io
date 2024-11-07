<div id="hdr_main">ข้อมูลบริษัท - ข้อมูลสำคัญเกี่ยวกับพนักงาน</div>
<?
include '../ir/sendmail.php';
?>
<!--<div id="ir-corp-content-box">
    <form method="post" action="" enctype="multipart/form-data">
    <ul>
        <li style="font-size:12px; font-weight:bold;border-bottom:1px solid #ccc; cursor:default;">Question</li>
        <li style="border-bottom:1px solid #ccc; padding:3px 15px;cursor:default;">Name - Surname : <input name="name" id="name" type="text" class="contact-input" value="<?=$_POST['name']?>"></li>
        <li style="border-bottom:1px solid #ccc; padding:3px 15px;cursor:default;">Email : <input name="email" id="email" type="text" class="contact-input" value="<?=$_POST['email']?>"></li>
        <li style="border-bottom:1px solid #ccc; padding:3px 15px;cursor:default;">Subject : <input name="subject" id="subject" type="text" class="contact-input" value="<?=$_POST['subject']?>"></li>
        <li style="padding:3px 15px;width:70px; float:left; cursor:default; ">Message : </li>
        <li style="padding:3px 0px; height:160px; width:440px; cursor:default;"><textarea name="detail" id="detail" cols="" class="contact-txtarea"><?=$_POST['detail']?></textarea></li>
        <li style=" padding:0; background-color:#231f20; text-align:right;">
            <img src="../image/ir/btn-send.png" width="57" height="24" id="submit-btn">
            <input type="image" src="../image/ir/btn-send.png" width="57" height="24" style="border: none;" id="submit-btn" name="submit" value="Submit">
        </li>
        
    </ul>
    </form>
</div>-->

<div style="padding:15px; width: 635px; background:#FFFFFF; text-align:left; font-size:14px">
            
          
            <font color="black" > 
            <b>จำนวนพนักงาน ณ 31 ธันวาคม 2565</b>
            <br>
            - จำนวนทั้งหมด 407 คน แบ่งเป็นเพศหญิง 173 คน (42%) และเพศชาย 234 คน (58%)
            <br><br>
            <b>จำนวนพนักงานผู้พิการ ณ 31 ธันวาคม 2565</b>
            <br>
            - ไม่มี
            <br><br>
            <b>สถิติการลาออก</b>
            <br>
            - ปี 2564 จำนวน 79 คน (แบ่งเป็นเพศหญิง 38 คน และเพศชาย 41 คน)
            <br>
            - ปี 2565 จำนวน 69 คน (แบ่งเป็นเพศหญิง 32 คน และเพศชาย 37 คน)
            <br><br>
            <b>ข้อมูลสถิติการเกิดอุบัติเหตุในระหว่างการปฏิบัติหน้าที่ของพนักงานและเจ้าหน้าที่ของบริษัทคู่ค้า</b>
            <br>
            - ปี 2563 - 2565 ไม่มีการเกิดอุบัติเหตุในระหว่างการปฏิบัติหน้าที่
            <br><br>
            <b>ข้อมูลสถิติการเสียชีวิตจากการปฏิบัติงานของพนักงานและเจ้าหน้าที่ของบริษัทคู่ค้าในพื้นที่การทำงานของบริษัทฯ</b>
            <br>
            - ปี 2563 - 2565 ไม่มีการเสียชีวิตจากการปฏิบัติงาน
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