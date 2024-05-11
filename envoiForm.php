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
$errors = [];

if(!array_key_exists('nom', $_POST) || $_POST['nom'] == ''){
    $errors['nom'] = "Vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('mail', $_POST) || $_POST['mail'] == ''|| !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)){
    $errors['mail'] = "Vous n'avez pas renseigné un email valide";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}
session_start();
if(!empty($errors)){
    
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('location: contact.php');
}else
{
    $_SESSION['success'] = 1;
    $expediteur = $_POST['mail'];
    $phpmailer->isSMTP();
    $phpmailer->Host = $SMTP_HOST;
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = $SMTP_PORT;
    $phpmailer->Username = $SMTP_USERNAME;
    $phpmailer->Password = $SMTP_PASSWORD;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $phpmailer->setFrom($SMTP_USERNAME, $_POST['nom']);
    $phpmailer->addAddress($SMTP_USERNAME);
    
    $phpmailer->isHTML(true);
    $phpmailer->Subject = 'Demande de contact';
    $phpmailer->Body = $_POST['message']. '<br> Contact : '.$expediteur;

    $phpmailer->CharSet = "UTF-8";
    $phpmailer->Encoding = "base64";
    
    $phpmailer->send();
    header('location: contact.php');
}
