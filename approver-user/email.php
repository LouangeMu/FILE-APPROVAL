<?php
// Recipient email address
$to = "tuyishimebertin@gmail.com";

// Email subject
$subject = "Test Email";

// Email content
$message = "This is a test email.";

// Sender email address
$from = "bertintuyishime114@gmail.com";

// Additional headers
$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "Content-Type: text/plain\r\n";

// Send email
$mailSent = mail($to, $subject, $message, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>
