<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = "dearlyfebriano08@gmail.com"; // Ganti dengan alamat email penerima
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $headers = "From: $name <$email>";
    
    if (mail($recipient, $subject, $message, $headers)) {
        echo "Pesan berhasil dikirim.";
    } else {
        echo "Pesan gagal dikirim.";
    }
}
?>