<?php
class FormDevis {
    // Propriétés des champs du formulaire
    public $nom;
    public $email;
    public $service;
    public $message;
    public $date_heure_actuelle;

    private $connexion;

    public function __construct($connexion) {
        $this->connexion = $connexion;
    }

    // Méthode pour valider les champs du formulaire
    public function validateForm(){
        // Ajoutez ici vos règles de validation
        // Par exemple, vérifiez si les champs ne sont pas vides
        if(empty($this->nom) || empty($this->email) || empty($this->service) || empty($this->message)){
            return false;
        }
        return true;
    }

    // Méthode pour enregistrer les données dans la base de données
    public function saveToDatabase($connexion){
        $date_heure_actuelle = new DateTime();
        $date_heure_formatee = $date_heure_actuelle->format('Y-m-d H:i:s');
        // Préparez la requête d'insertion
        $query = "INSERT INTO devis (nom, mail, id_service, message, date) VALUES (:nom, :email, :service, :message, :date)";
        $stmt = $connexion->prepare($query);

        // Liaison des paramètres avec les valeurs des propriétés
        $stmt->bindParam(":nom", $this->nom);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":service", $this->service);
        $stmt->bindParam(":message", $this->message);
        $stmt->bindParam(":date", $date_heure_formatee);

        // Exécution de la requête
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    // Méthode pour le select
    public function selectOptionsService(){
        $query = "SELECT * from service";
        $stmt = $this->connexion->prepare($query);
        $stmt->execute();
        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Générer les options HTML pour la sélection du service
        $options = "";
        foreach ($services as $service) {
            $options .= "<option value='" . htmlspecialchars($service['id']) . "'>" . htmlspecialchars($service['nom']) . "</option>";
        }
        return $options;
    }
    
}
?>
