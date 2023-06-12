<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "tua_email@example.com";
  $subject = "Hai un nuovo messaggio.. ";
  $body = "Nome e Cognome: $name\nEmail: $email\nMessaggio: $message";

  if (mail($to, $subject, $body)) {
    echo "Email inviata con successo!";
  } else {
    echo "Si è verificato un errore durante l'invio dell'email.";
  }
}
?>
