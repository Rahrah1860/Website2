<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "matthewsills8@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: " . $email . "\r\nReply-To: " . $email;
    $fullMessage = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>
