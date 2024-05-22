<?php
require 'vendor/autoload.php';
use Dotenv\Dotenv;
$env=Dotenv::createImmutable(dirname(__DIR__));
echo __DIR__;
$env->Load();
class Db {
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $pdo;

    public function __construct() {
        $this->host = $_SERVER["DB_HOST"];
        $this->dbname = $_SERVER['DB_NAME'];
        $this->username = $_SERVER['DB_USER'];
        $this->password = $_SERVER['DB_PASSWORD'];

        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->pdo;
    }
    
}
