<?php

namespace MathieuMT\myPortfolio\Model;

use PDO;

class Model {
    
    // PDO object to access the database:
    private $db;
    
    // Execute an eventually parameterized SQL query:
    protected function executeRequest($sql, $params = null) {
       if ($params == null) {
            $result = $this->dbConnect()->query($sql); // Direct execution.
        }
        else {
            $result = $this->dbConnect()->prepare($sql); // Prepared query
            $result->execute($params);
        }
        //var_dump($result);
        return $result;
    }
    // Returns a connection object to the database by initiating the connection as needed:
    private function dbConnect() {
        if ($this->db == null) {
            // Creating the connection:
             $this->db = new PDO('mysql:host='.DBHOST.'; dbname='.DBNAME.';charset=utf8', NAME, PASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->db;
    }
}



