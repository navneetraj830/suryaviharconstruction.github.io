<?php
    
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    
     
    if(isset($_POST['submit']))
    {	    
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $mobnum = $_POST["mblno"];
        $message = $_POST["message"];
        
    }
     $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $mobnum = $_POST["mblno"];
        $message = $_POST["message"];
        
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';    

    require 'PHPMailer/vendor/autoload.php';
    $mail = new PHPMailer;
    

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'mail.sashaktvihar.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'info@sashaktvihar.com';                     // SMTP username
        $mail->Password   = 'Sashaktvihar@123';                               // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to
    
        //Recipients
        $mail->setFrom('info@sashaktvihar.com', 'Sashakt Vihar');
        $mail->addAddress('info@sashaktvihar.com', 'Sashakt Vihar');     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo($email, $name);
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message.'<br><br>Name:- '.$name.'<br>Mobile No.:- '.$mobnum.'<br>Email id:- '.$email;
        $mail->send();
        
        $mail->ClearAddresses();
        $mail->ClearReplyTos();
        $mail->addReplyTo('info@sashaktvihar.com', 'Sashakt Vihar');
        $mail->addAddress($email, $name);  
        $mail->Subject = 'Confirmation mail';
        $mail->Body    = 'Hello <b>'.$name.'</b>,<br><br>&nbsp;We have received your query we will reach out to you shortly.';
        $mail->send();
        //echo 'Message has been sent';
        header("Location: https://sashaktvihar.com/contact-form-thank-you.php");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
 

?>