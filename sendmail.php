<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>PHPMailer - sendmail test</title>
</head>
<body>
<?php
require '../sites/all/modules/phpmailer/phpmailer/class.phpmailer.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
//Set who the message is to be sent from
$mail->setFrom('info@midlandschristian.co.zw', 'Midlands Christian School');
//Set an alternative reply-to address
$mail->addReplyTo('info@midlandschristian.co.zw', 'Midlands Christian School');
//Set who the message is to be sent to
$mail->addAddress('emuroiwa@gmail.com', 'hdsj');
//Set the subject line
$mail->Subject = 'PHPMailer sendmail test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>
</body>
</html>
