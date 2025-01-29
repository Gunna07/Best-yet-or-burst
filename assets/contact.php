<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = 'kolawoleadeleke21@gmail.com';
        $subject = 'New Contact Form Message';
        $body = "From: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            header('Location: contact.html?status=success&message=Message+sent+successfully!');
        } else {
            header('Location: contact.html?status=error&message=Failed+to+send+your+message.');
        }
    } else {
        header('Location: contact.html?status=error&message=Please+fill+all+the+fields.');
    }
}
?>
