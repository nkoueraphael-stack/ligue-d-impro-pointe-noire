<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "tonemail@example.com"; // <-- Remplace par ton e-mail

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']) ?: "Nouveau message du site";
    $message = "Nom: $name\n";
    $message .= "Email: $email\n\n";
    $message .= "Message:\n" . htmlspecialchars($_POST['message']);

    $headers = "From: $email";

    if(mail($to, $subject, $message, $headers)) {
        echo "Merci $name, votre message a été envoyé avec succès !";
    } else {
        echo "Erreur : le message n'a pas pu être envoyé.";
    }
} else {
    echo "Accès interdit.";
}
?>
