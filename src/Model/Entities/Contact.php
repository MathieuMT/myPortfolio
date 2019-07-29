<?php

namespace MathieuMT\myPortfolio\Model\Entities;

use MathieuMT\myPortfolio\Engine\ViewBackEnd;

class Contact{
    
    private $_id,$_firstname,$_lastname,$_email,$_subject,$_comments,$_comment_date;
    
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
    public function firstname() { return $this->_firstname;}
    public function lastname() { return $this->_lastname;}
    public function email() { return $this->_email;}
    public function subject() { return $this->_subject;}
    public function comments() { return $this->_comments;}
    public function comment_date() { return $this->_comment_date;}
    
    public function comment_date_fr() { 
        
        setlocale (LC_TIME, 'fr_FR.utf8','fra'); 

        return date('d M Y', strtotime($this->_comment_date)); 
    }

    
    // Setters:
    public function setId($id) {
        $id = (int) $id;
        
        if ($id > 0) {
            $this->_id = $id;
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
    
    public function setSubject($subject) {
        
        if(is_string($subject)) {
            $this->_subject = $subject;
        }
    }
    
    
    public function setComments($comments) {
        
        if(is_string($comments)) {
            $this->_comments = $comments;
        }
    }
    
    
    public function setComment_date($comment_date) {
        
        if(is_string($comment_date)) {
            $this->_comment_date = $comment_date;
        }
    }
      
}
