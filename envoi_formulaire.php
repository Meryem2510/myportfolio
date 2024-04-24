<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Adresse email de destination
    $to = "meryem18elfelloussi@gmail.com";

    // Entêtes de l'email
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Contenu de l'email
    $email_content = "Vous avez reçu un nouveau message du formulaire de contact de votre site web.\n\n";
    $email_content .= "Nom: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Sujet: $subject\n";
    $email_content .= "Message:\n$message\n";

    // Envoyer l'email
    mail($to, $subject, $email_content, $headers);

    // Redirection après l'envoi du formulaire
    header("Location: merci.html");
    exit;
}
?>
