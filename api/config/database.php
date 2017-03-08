<?php
class Database{

    // se ingresan las especificiones de la BD que uno genera
    private $host = "localhost";
    private $db_name = "angularjs_crud_level_1";
    private $username = "root";
    private $password = "";
    public $conn;

    // se realiza la conectividad a la BD creadas
    public function getConnection(){ $this->conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
