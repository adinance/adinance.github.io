<?php
//echo $_POST['name'];
//echo "<br>";
//echo $_POST['email'];
//echo "<br>";
//echo $_POST['subject'];
//echo "<br>";
//echo $_POST['detail'];
if(isset($_POST['name'])){
    require ("../lib/phpmailer/class.phpmailer.php");

    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    
    $mail->Host = "ssl://smtp.gmail.com"; 
    $mail->Port = 465; 
    $mail->Username = "cmogroupir@gmail.com";
    $mail->Password = "ir5590505";
    
    $mail->SetFrom($_POST['email'], "CMO IR Site");
//    $mail->FromName("CMO IR Site");
    $mail->AddReplyTo($_POST['email'], $_POST['name']);
//    $mail->AddAddress("cmoir@cm.co.th", "CMO PLC. : Investor Relations Information");
//    $mail->AddAddress("cmogroupir@gmail.com", "CMO PLC. : Investor Relations Information");
    $mail->AddAddress("adinance@hotmail.com", "CMO PLC. : Investor Relations Information");

    $mail->CharSet = "utf-8";
    $mail->Subject = $_POST['subject'];
    $mail->MsgHTML($_POST['detail']);

    if(!$mail->Send()){ 
//        $mail->ErrorInfo;
//        echo "<script>alert(\"$mail->ErrorInfo\");</script>";
    }else{
        if($_GET[lang]=='th'){
            echo "<script>alert(\"ส่งข้อความสำเร็จ!\");</script>";
        }else{
            echo "<script>alert(\"Complete!\");</script>";
        }
    }
}
?>
