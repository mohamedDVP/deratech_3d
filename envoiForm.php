<?php

require_once 'lib/configMail.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require_once "vendor/autoload.php";
try {
    $phpmailer = new PHPMailer(true);
}catch (Exception $e){
    echo "Mailer Error: ".$e->getMessage();
}
$phpmailer->SMTPDebug = SMTP::DEBUG_SERVER; 
$phpmailer->isSMTP();
$phpmailer->Host = 'smtp.laposte.net';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 587;
$phpmailer->Username = $SMTP_USERNAME;
$phpmailer->Password = $SMTP_PASSWORD;
$phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

$phpmailer->setFrom("mohamed.mak@laposte.net", $_POST['nom']);
$phpmailer->addAddress($_POST['mail']);

$phpmailer->isHTML(true);
$phpmailer->Subject = 'Demande de contact';
$phpmailer->Body = $_POST['message'];

$phpmailer->CharSet = "UTF-8";
$phpmailer->Encoding = "base64";

$phpmailer->send();



/*if(isset($_POST['send'])){
    $destinataire = 'mohamed.mak@laposte.net';
    // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
    $expediteur = $_POST['mail'];
    $objet = 'Test'; // Objet du message
    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
    $headers .= 'Reply-To: '.$expediteur."\r\n"; // Mail de reponse
    $headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\r\n"; // Expediteur
    $headers .= 'Delivered-to: '.$destinataire."\r\n"; // Destinataire       
    $message = '<div style="width: 100%; text-align: center; font-weight: bold">'.$_POST["message"].'"</div>';
    if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
    {
        echo 'Votre message a bien été envoyé ';
    }
    else // Non envoyé
    {
        echo "Votre message n'a pas pu être envoyé";
    }
}*/

