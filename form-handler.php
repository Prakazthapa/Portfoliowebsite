<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                     // Enable SMTP authentication
        $mail->Username = 'prakasambhav24@gmail.com';   // SMTP username (your Gmail email address)
        $mail->Password = 'qfcczsprbrtzssxa';          // SMTP password (your Gmail password or application-specific password)
        $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                          // TCP port to connect to

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('prakasambhav24@gmail.com'); // Add a recipient email address

        // Content
        $mail->isHTML(false);                       // Set email format to plain text
        $mail->Subject = $subject;
        $mail->Body    = $message;

        // Send the email
        $mail->send();
        
        // Redirect to success page if the email is sent successfully
        header("Location: index.html?success=true");
        exit();
    } catch (Exception $e) {
        // Redirect to error page with error message if sending email fails
        header("Location: index.html?success=false&error=" . urlencode($mail->ErrorInfo));
        exit();
    }
} else {
    // Redirect to error page if the request method is not POST
    header("Location: index.html?success=false");
    exit();
}
?>
