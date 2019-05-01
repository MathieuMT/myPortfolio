<?php

require_once 'Models/Frontend/UserManager.php';

require_once 'Views/ViewFrontEnd.php';


class User {
    private $_id,$_username,/*$_password,*/$_description;
    
    
    public function __construct(array $data){
        $this->hydrate($data);
    }
    
    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }
    
    // Getters:
    public function id() { return $this->_id; }
    public function username() { return $this->_username;}
   //public function password() { return $this->_password;}
    public function description() { return $this->_description;}
    
    // Setters:
    public function setId($id) {
        $id = (int) $id;
        
        if ($id > 0) {
            $this->_id = $id;
        }
    }
    
    public function setUsername($username) {
        
        if(is_string($username)) {
            $this->_username = $username;
        }
    }
    
    /*
    public function setPassword($password) {
        
        if(is_string($password)) {
            $this->_password = $password;
        }
    }
    */
    
    public function setDescription($description) {
        
        if (is_string($description)) {
            $this->_description = $description;
        }
    }
    
}
