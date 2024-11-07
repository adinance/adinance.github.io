<?php
/**********************************************
* Meen's facebook & inline e-mail attachment system
* File version 5
* Using same PHPMailer lib.
* (c)2011 Suttichort Sarathum, All right reserved.
* Mod date 16:50 11/5/2554
**********************************************/
//Configuration start here.

	//Set image processor path (this link will show in user's mail)
	//Please set this url link to fb_mail.php
	//$fb_api = "http://www.theeyesplayground.com/isuzuKinect/fb_mail.php";
	$fileAttach = $_SERVER['DOCUMENT_ROOT']."/theeyesplayground/freshtive_photobooth/museum/imageFiles/tempImage.jpg";


	//Set your e-mail information here
	$mail_sent_name = "10 Iconic Museums";

	$mail_sent_addr = "freshtive@cmo-group.com";



	$mail_reply_name = "THE EYES' PlayGround";

	$mail_reply_addr = "no-reply@theeyesplayground.com";

//Configuration end here.

	$recip  = $_POST['email']; 
	$file  = $_POST['file'];


	require("class.phpmailer.php");

	$mail = new PHPMailer();

	$mail->IsMail();
	
	// dean
	/*$mail->IsSMTP(); 
	$mail->SMTPAuth   = true;                 
	$mail->SMTPSecure = "ssl://smtp.gmail.com";                 
	$mail->SMTPDebug = false;
	$mail->Host       = "smtp.gmail.com";     
	$mail->Port       = 465;                  
    $mail->Username('freshtive@cmo-group.com');
    $mail->Password('freshtive2014');*/
    
    
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    
    $mail->Host = "ssl://smtp.gmail.com"; 
    $mail->Port = 465; 
    $mail->Username = "cmogroupir@gmail.com";
    $mail->Password = "ir5590505";
    // end dean
    
	$mail->AddAddress($recip);
	$mail->Subject = tis2utf8("Your Museum Photo");

	$mail->IsHTML(true);

/**********************************************
* Meen's Code start here
* Embed image to e-mail instead link from server. 
* Please make sure that current directory is set to 777
* image src must set to 'cid:attach_img_ref'
**********************************************/

	$tmp_img = md5($file).".tmp";
	@copy($file, $tmp_img);
	$mail->AddEmbeddedImage($tmp_img, 'attach_img_ref', 'pro_image.jpg');
	$mail->AddAttachment( $fileAttach , 'your_photo.jpg' );
	$fb_link = "{$fb_api}?img_url={$file}&img_md5=".md5("<!meen!>::salt::fq3#&#*)-fdGa".$file);


	$mail->SetFrom($mail_sent_addr, $mail_sent_name);
	$mail->AddReplyTo($mail_reply_addr, $mail_reply_name);
	$mail->CharSet = "UTF-8";

/**********************************************
* Meen's Code end here
**********************************************/

	$mail->Body = tis2utf8("Thanks for visit us!\n<br />To view the message, please use an HTML compatible email viewer!<br />\n<img src='cid:attach_img_ref' width='480' height='640'>");
	
	if(!$mail->Send())
	{
	   echo "Error sending: " . $mail->ErrorInfo;;
	}
	else
	{
	   echo "Letter sent";
	}

//Delete tmp image
	@unlink($tmp_img);

/**********************************************
* Meen's Code start here
* Convert normal tis-620 charecter to UTF-8
**********************************************/
function tis2utf8($tis)
{
	for( $i=0 ; $i< strlen($tis) ; $i++ )
	{
		$s = substr($tis, $i, 1);
		$val = ord($s);
		if( $val < 0x80 )
		{
        			$utf8 .= $s;
		}
		elseif ( ( 0xA1 <= $val and $val <= 0xDA ) or ( 0xDF <= $val and $val <= 0xFB ) )
		{
			$unicode = 0x0E00 + $val - 0xA0;
			$utf8 .= chr( 0xE0 | ($unicode >> 12) );
			$utf8 .= chr( 0x80 | (($unicode >> 6) & 0x3F) );
			$utf8 .= chr( 0x80 | ($unicode & 0x3F) );
		}
	}
 	return $utf8;
}

/**********************************************
* Meen's Code end here
**********************************************/
?>