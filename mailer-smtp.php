<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader or include PHPMailer's autoloader
require 'vendor/autoload.php'; // If using Composer
// require 'path/to/PHPMailer/PHPMailer.php';
// require 'path/to/PHPMailer/Exception.php';
// require 'path/to/PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth = true;
    $mail->Username = 'abhishek@jrsgl.com'; // SMTP username
    $mail->Password = 'zajeehixbuzxqysu'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587; // TCP port to connect to

    //Recipients
    $mail->setFrom('abhisharma8860855650@gmail.com', 'Your Name');
   // $mail->addAddress('recipient@example.com', 'Recipient Name'); // Add a recipient

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Subject of the email';
    $mail->Body    = '<html>
                        <head>
                            <style>
                                body { font-family: Arial, sans-serif; background-color: #f5f5f5; color: #333; }
                                .email-container { max-width: 600px; margin: 0 auto; background-color: #ffffff; }
                                .header { padding: 20px; background-color: #1c4587; color: white; text-align: center; }
                                .content { padding: 20px; text-align: center; }
                                .footer { padding: 10px; background-color: #1c4587; color: white; text-align: center; }
                            </style>
                        </head>
                        <body>
                            <div class="email-container">
                                <div class="header">
                                    <h1>Welcome to Our Service</h1>
                                </div>
                                <div class="content">
                                    <p>Thank you for signing up for our service. We're excited to have you on board!</p>
                                </div>
                                <div class="footer">
                                    <p>&copy; 2025 Your Company. All rights reserved.</p>
                                </div>
                            </div>
                        </body>
                    </html>';
    $mail->AltBody = 'This is the plain text version of the email content.';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
