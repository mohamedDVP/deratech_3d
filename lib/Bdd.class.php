<?php
class Db {
    private $host = "mysql-deratech3d.alwaysdata.net";
    private $db_name = "deratech3d_bdd";
    private $username = "359780_deratech3";
    private $password = "Deratech_3d_Samir";
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