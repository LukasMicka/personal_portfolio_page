<?php   

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST["submit"])) {
    require '../vendor/autoload.php';
    
        $mail = new PHPMailer;                              // Passing `true` enables exceptions
        try {
        //Server settings
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.seznam.cz'; //smtp2.example.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'lukas.micka@seznam.cz';            // SMTP username
        $mail->Password = 'lukasenko14';                      // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = "25";                                    // TCP port to connect to
    
        //Recipients
        $mail->setFrom($_POST["email"]);
        $mail->addAddress('lukas.micka@seznam.cz');     // Add a recipient // Name is optional
    
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Zprava zaslana z Portfolio website';
        $mail->Body    = "<h2>First name: {$_POST["fname"]}, Last name: {$_POST["lname"]}</h2><br>
        <h2>Email: {$_POST["email"]}, Phone: {$_POST["phone"]}</h2><br><p>Message: {$_POST["msg"]}</p>";
            
        $mail->send();
        $message = 'Your message has been successfully sent!';
  } catch (Exception $e) {
        $message = 'Your message could not be sent. Please try again later.';
  }
}
?>