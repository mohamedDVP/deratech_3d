<?php
// Inclusion des classes
include_once 'lib/Bdd.class.php';
include_once 'lib/FormContact.class.php';

// Vérifie si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Création d'une instance de la classe de connexion à la base de données
    $database = new Db();
    $connexion = $database->getConnection();

    // Création d'une instance de la classe de formulaire de contact
    $contact = new FormContact();

    // Récupération des données du formulaire
    $contact->nom = $_POST['nom'];
    $contact->email = $_POST['mail'];
    $contact->message = $_POST['message'];
    

    // Validation du formulaire
    if($contact->validateForm()){
        // Enregistrement des données dans la base de données
        if($contact->saveToDatabase($connexion)){
            echo "Votre message a été envoyé avec succès.";
        } else {
            echo "Erreur lors de l'envoi du message.";
        }
    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
}
?>
