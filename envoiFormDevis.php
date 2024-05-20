<?php
// Inclusion des classes
include_once 'lib/Bdd.class.php';
include_once 'lib/FormDevis.class.php';





// Vérifie si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Création d'une instance de la classe de connexion à la base de données
    $database = new Db();
    $connexion = $database->getConnection();

    // Création d'une instance de la classe de formulaire de demande de devis
    $devis = new FormDevis($connexion);

    // Récupération des données du formulaire
    $devis->nom = $_POST['nom'];
    $devis->email = $_POST['mail'];
    $devis->service = $_POST['service'];
    $devis->message = $_POST['message'];

    // Validation du formulaire
    if($devis->validateForm()){
        // Enregistrement des données dans la base de données
        if($devis->saveToDatabase($connexion)){
            echo "Votre demande de devis a été envoyée avec succès.";
        } else {
            echo "Erreur lors de l'envoi de la demande de devis.";
        }
    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
}