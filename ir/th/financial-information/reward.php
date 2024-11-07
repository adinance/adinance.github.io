<div id="hdr_main">รางวัล</div>
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

<div style="padding:15px; width:630px; background:#FFFFFF; text-align:left; font-size:14px">
 <!--<font color="#ffc20e" >
            PIYAMART YONGSIRICHAISAKUL
            </font>
            <br><br>
            <font color="white" >
            Chief Financial Officer
            <br><br>
            Tel: &nbsp;&nbsp;&nbsp;  &nbsp; +662 088 3888 Ext.12203
            <br>
            Mobile: +668 9 156 4515
            <br>
            Fax:   &nbsp;&nbsp;&nbsp;&nbsp; +662 088 3857
            <br>
            Email:  &nbsp;&nbsp;piyamart@cmo-group.com
            </font>
            
            <br><br><br>-->
            <font color="black" font-size: 310px>
            <u>เกี่ยวกับเรา : รางวัล</u>
            </font>
            <br><br>
            <font color="black" > 
            1. SET AWARD 2010 / Corporate Social Responsibility Award Company listed on MAI จัดโดย
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;ตลาดหลักทรัพย์แห่งประเทศไทย และ วารสารการเงินธนาคาร
            <br>
            2. EVENT AWARD 2010 The Power of below the line (E.M. Governmental award)
            <br>
            3. EVENT AWARD 2010 The Power of below the line ((The best event award))
            <br>
            4. รางวัล SILVER AWARD สาขาอีเว้นท์ มาร์เก็ตติ้ง ในงาน ADMAN AWRADS'07
            <br>
            5. รางวัลการจัดงานธุรกิจเชิงสร้างสรรค์" หรือ Thailand Creative Event Awards (TCEA)
            <br>
            6. รางวัลผู้ออกแบบพาวิลเลี่ยนดีเด่น บีโอไอแฟร์ 2011 "Going Green for the Future"
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;6.1 ผู้ออกแบบ ศาลาแสดงนิทรรศการกลุ่มบริษัท ในเครือ ปตท.
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;6.2 ผู้ออกแบบ ศาลาแสดงนิทรรศการกลุ่มบริษัท ฮอนด้า ในประเทศไทย
            <br>
            7. รางวัล MAI Company CEO of the Year ในงานประกาศผลรางวัล Bloomberg Businessweek Thailand
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;Awards ครั้งที่ 1 ซึ่งจัดโดยนิตยสาร Bloomberg Businessweek ไทยแลนด์
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