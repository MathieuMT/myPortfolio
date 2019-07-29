<?php

namespace MathieuMT\myPortfolio\Model\Entities;

use MathieuMT\myPortfolio\Model\UserDAO;
use MathieuMT\myPortfolio\Engine\ViewFrontEnd;

class User {
    
    private $_id,$_username,$_firstname,$_lastname,$_email,$_pass,$_profession,$_description,$_avatar,$_mini_avatar;
    
    public function __construct(array $data){
        $this->hydrate($data);
    }
    
    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
            /* On récupère le nom du setter correspondant à l'attribut. */
            $method = 'set' . ucfirst($key);
            /* Si le setter correspondant existe */
            if (method_exists($this, $method)){
                /* On appelle le setter */
                $this->$method($value);
            }
        }
    }
    
    // Getters:
    public function id() { return $this->_id; }
    public function username() { return $this->_username;}
    public function firstname() { return $this->_firstname;}
    public function lastname() { return $this->_lastname;}
    public function email() { return $this->_email;}
    public function pass() { return $this->_pass;}
    public function profession() { return $this->_profession;}
    public function description() { return $this->_description;}
    public function avatar() { return $this->_avatar;}
    public function mini_avatar() { return $this->_mini_avatar;}
    
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
    
    public function setFirstname($firstname) {
        
        if(is_string($firstname)) {
            $this->_firstname = $firstname;
        }
    }
    
    public function setLastname($lastname) {
        
        if(is_string($lastname)) {
            $this->_lastname = $lastname;
        }
    }
    
    public function setEmail($email) {
        
        if(is_string($email)) {
            $this->_email = $email;
        }
    }
    
    
    public function setPass($pass) {
        
        if(is_string($pass)) {
            $this->_pass = $pass;
        }
    }
    
    public function setProfession($profession) {
        
        if (is_string($profession)) {
            $this->_profession = $profession;
        }
    }
    
    public function setDescription($description) {
        
        if (is_string($description)) {
            $this->_description = $description;
        }
    }
    
    public function setAvatar($avatar) {
        
        if (is_string($avatar)) {
            $this->_avatar = $avatar;
        }
    }
    
    public function setMini_avatar($mini_avatar) {
        
        if (is_string($mini_avatar)) {
            $this->_mini_avatar = $mini_avatar;
        }
    }
    
}
