<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $guests = htmlspecialchars($_POST['guests']);
    $attendance = htmlspecialchars($_POST['attendance']);
    $questions = htmlspecialchars($_POST['questions']);

    $to = 'lauravkj@gmail.com'; // Erstat med din e-mailadresse
    $subject = 'Bryllup S.U. - ' . $name;
    $message = "Navn: $name\n";
    $message .= "Email: $email\n";
    $message .= "Antal personer: $guests\n";
    $message .= "Kan du komme: $attendance\n";
    $message .= "Personlig besked eller spørgsmål: $questions\n";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Tak for din tilmelding!";
    } else {
        echo "Der opstod en fejl, prøv igen senere.";
    }
}
?>
