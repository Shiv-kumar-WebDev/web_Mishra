<?php
// Start session
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Retrieve form data only if the form has been submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if all form fields are set
    if (isset($_POST['Name'], $_POST['Email'], $_POST['Phone'], $_POST['Massage'])) {
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $phone = $_POST['Phone'];
        $message = $_POST['Massage'];

        // Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->SMTPDebug = 0;  // Turn off debugging output
            $mail->isSMTP();       // Send using SMTP
            $mail->Host = 'smtp.gmail.com';  // Set the SMTP server to send through
            $mail->SMTPAuth = true;          // Enable SMTP authentication
            $mail->Username = 'missmishra0610@gmail.com'; // SMTP username
            $mail->Password = 'nfnmayiblhgubkgn';         // SMTP password (use App Password if 2FA is enabled)
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;  // Use port 587 for TLS or 465 for SSL

            // Recipients
            $mail->setFrom('missmishra0610@gmail.com', 'Mailer');
            $mail->addAddress('mishra29rinki@gmail.com', 'User'); // Add a recipient

            // Content
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'New Website Enquiry';
            $mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";

            // Send email
            $mail->send();
            $_SESSION['message'] = 'Message has been sent';
        
        } catch (Exception $e) {
            $_SESSION['message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        header('Location: index.php');
        exit; // Terminate script execution after redirect
        
    } else {
        echo "Please fill in all the fields.";
    }
}

?>
