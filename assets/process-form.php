<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "nozari.pouria@gmail.com"; // replace with your email address
    $subject = "New Form Submission";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>
