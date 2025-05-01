<?php
// Λαμβάνει τα δεδομένα της φόρμας
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Ρύθμισε το email σου εδώ:
$to = "georggian10@gmail.com";
$subject = "Νέο μήνυμα από το Mitselos Olive Oil";
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$body = "Όνομα: " . $name . "\n";
$body .= "Email: " . $email . "\n";
$body .= "Μήνυμα:\n" . $message;

// Αποστολή email
if (mail($to, $subject, $body, $headers)) {
    echo "Το μήνυμά σας εστάλη επιτυχώς! Σας ευχαριστούμε.";
} else {
    echo "Υπήρξε πρόβλημα στην αποστολή. Παρακαλώ δοκιμάστε ξανά.";
}
?>

