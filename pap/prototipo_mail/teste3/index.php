<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true); // Passing `true` enables exceptions                             
try {
    //Server settings
    $mail->SMTPDebug = 0; // Enable verbose debug output                                 
    $mail->isSMTP(); //Set mailer to use SMTP                                      
    $mail->Host =  'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP aut 'smtp.gmail.com'hentication
    $mail->Username = 'miguelfilipe.099@gmail.com'; // SMTP username
    $mail->Password = 'benfica2009'; // SMTP password
    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; // TCP port to connect to

    //Recipients
    $mail->setFrom('miguelfilipe.099@gmail.com', 'Sender Name'); // Sender email and name
    $mail->addAddress('miguelfilipe.09@live.com.pt','Miguel Jaime'); // Reciver email

    // if you want to send email to multiple users, then add the email addresses you which you want to send.
    //$mail->addAddress('reciver2@gmail.com');
    //$mail->addAddress('reciver3@gmail.com');

    //For Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');  // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // You can specify the file name

    //Content
    $mail->isHTML(true);// Set email format to HTML                                  
    $mail->Subject = 'Email teste'; // Subject of the email
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>