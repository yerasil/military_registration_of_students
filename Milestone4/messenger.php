<?php
require_once "PHPMailer/PHPMailer-master/src/PHPMailer.php";
require_once "PHPMailer/PHPMailer-master/src/Exception.php";
require_once "PHPMailer/PHPMailer-master/src/SMTP.php";

$email22=$_COOKIE['email'];
echo $email22;
$kkk=rand(1,999999);
$secret=hash('ripemd160', 'mycode'.$kkk);


$mail= new \PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();

$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->Username="phpprojectp@gmail.com";
$mail->Password="123423php";

$mail->SMTPSecure="ssl";
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);


$mail->setFrom("almas.aubakirov.12@gmail.com","name");

$mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;


//Set an alternative reply-to address
$mail->addReplyTo('phpprojectp@gmail.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('almas.aubakirov.12@gmail.com', 'John Doe');

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';


$mail->AltBody = 'This is a plain-text message body';
$mail->Body=$secret;


if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}
?>