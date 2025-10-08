<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Demo</title>
</head>
<body>
  <?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer(true);
    $firstName = $_POST["first_name"];
			$lastName = $_POST["last_name"];
       $email = $_POST["email"];
			$comments = $_POST["comments"];
			$date = date('m/d/Y');
    $reason =  $_POST["reason"];
    		if ($reason == 'opinion') {
				$reason = 'Opinions';
			} elseif ($reason == 'support') {
				$reason = 'Support';
			} elseif ($reason == 'question') {
				$reason = 'Questions';
			} elseif ($reason == 'job') {
				$reason = 'Career';
			} else {
				$reason = 'Other';
			}

    try {
        // Server settings
        // Enable verbose debug output for troubleshooting.
        // Set to 0 in production to disable.
        $mail->SMTPDebug = 0;
        $mail->isSMTP(); // Use SMTP to send.
        $mail->Host = 'smtp.gmail.com'; // Specify Gmail's SMTP server.
        $mail->SMTPAuth = true; // Enable SMTP authentication.
        $mail->Username = 'pthongsouk8212@gmail.com'; // Your full Gmail address.
        $mail->Password = 'arvg smqm cmyy dzam'; // Your 16-character App Password.
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption.
        $mail->Port = 587; // TCP port for TLS.

        // Recipients
        $mail->setFrom = $_POST["email"]; 
        $mail->addAddress('pthongsouk8212@gmail.com', 'Priscilla T');

         // Content
        $mail->isHTML(true);
        $mail->Subject = $reason;
         $mail->Body    = "<html><body>";
        $mail->Body .= '<p>Thank you '.$_POST["first_name"].' ,for contacting PLT Corp on '.$date.' your message is beinging reviewed. Expect a response in 2-3 buisness days.</p>';
        $mail->Body .= 'Your Comment: '.$_POST["comments"];
        $mail->Body .= '<br>Thank you for visiting PLT Corp!';
        $mail->AltBody = 'This is the plain text version of the email.'; 
         $mail->Body   .= "</body></html>";

  

        $mail->send();
       echo date("l,F j,Y");
       
        echo '<br>Your message has been sent successfully, we will get back to you soon!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  ?>
</body>
</html>