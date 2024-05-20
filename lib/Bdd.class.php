<?php
class Db {
    private $host = "localhost";
    private $db_name = "deratech_3d";
    private $username = "root";
    private $password = "";
    public $connexion;

    // Méthode pour obtenir la connexion à la base de données
    public function getConnection(){
        $this->connexion = null;
        try {
            $this->connexion = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch(PDOException $exception){
            echo "Erreur de connexion : " . $exception->getMessage();
        }
        return $this->connexion;
    }
}
?>