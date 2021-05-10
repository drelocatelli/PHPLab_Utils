<?php

class PDOController extends PDO {
    
    public $conn;

    public function __construct() {

        try{

            $this->conn = new PDO("mysql:host=localhost;dbname=db_test", "root", "");

        }catch(PDOException $err) {
            
            echo $err->getMessage();
            
        }
        
    }

    private function setParams($statement, $parameters = array()) {

        foreach ($parameters as $key => $value) {

            $this->setParam($statement, $key, $value);
            
        }
        
    }

    private function setParam($statement, $key, $value) {

        $statement->bindParam($key, $value);
        
    }

    public function query($rawQuery, $params = array()) {

        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();
        
        return $stmt;

    }

    public function select($rawQuery, $params = array()) { 

        $stmt = $this->query($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);


    }
    
}