<?php
	include  "PHPMailer/src/PHPMailer.php";
	include  "PHPMailer/src/Exception.php";
	include  "PHPMailer/src/OAuth.php";
	include  "PHPMailer/src/POP3.php";
	include  "PHPMailer/src/SMTP.php";
 
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	$mail = new PHPMailer(true);
	//print_r($mail);
	try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'nguyenquangvietvp@gmail.com';                 // SMTP username
    $mail->Password = 'mxqsbewqilcmluyu';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
 
    //Recipients
    $mail->setFrom('nguyenquangvietvp@gmail.com', 'Mailer');
    
    $mail->addAddress('minhkhoi2749@gmail.com', 'Minh Khôi');     // Add a recipient
    $mail->addAddress('tuantu21@gmail.com', 'Tuấn Tú');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('nguyenquangviet2k1@gmail.com');
    //$mail->addBCC('bcc@example.com');
 
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Test mail';
    $mail->Body    = 'Menu content test mail';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();
    echo 'Message has been sent';
	} catch (Exception $e) {
	    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}
	

?>