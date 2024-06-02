<?php
class FormContact {
    // Propriétés des champs du formulaire
    public $nom;
    public $email;
    public $message;
    public $date_heure_actuelle;

    // Méthode pour valider les champs du formulaire
    public function validateForm(){
        // Ajoutez ici vos règles de validation
        // Par exemple, vérifiez si les champs ne sont pas vides
        if(empty($this->nom) || empty($this->email) || empty($this->message)){
            return false;
        }
        return true;
    }

    // Méthode pour enregistrer les données dans la base de données
    public function saveToDatabase($connexion){
        date_default_timezone_set('Europe/Paris');
        $date_heure_actuelle = new DateTime();
        $date_heure_formatee = $date_heure_actuelle->format('Y-m-d H:i:s');
        // Préparez la requête d'insertion
        $query = "INSERT INTO contact (nom, mail, message, date) VALUES (:nom, :email, :message, :date)";
        $stmt = $connexion->prepare($query);

        // Liaison des paramètres avec les valeurs des propriétés
        $stmt->bindParam(":nom", $this->nom);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":message", $this->message);
        $stmt->bindParam(":date", $date_heure_formatee);

        // Exécution de la requête
        if($stmt->execute()){
            return true;
        }
        return false;
    }
}
?>
