<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "malikamir2473@gmail.com";  // tumhari email
    $full_subject = "New Contact: " . $subject;

    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    $headers = "From: $email";

    if (mail($to, $full_subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Message failed to send'); window.history.back();</script>";
    }
}
?>
