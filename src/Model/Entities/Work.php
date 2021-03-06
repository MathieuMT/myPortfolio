<?php

namespace MathieuMT\myPortfolio\Model\Entities;

use MathieuMT\myPortfolio\Model\WorkDAO;
use MathieuMT\myPortfolio\Engine\ViewFrontEnd;

class Work {
    
    private $_id,$_name,$_workImg,$_workTitle,$_workDescription,$_workCategory, $_workLink;
    
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
    public function name() { return $this->_name;}
    public function workImg() { return $this->_workImg;}
    public function workTitle() { return $this->_workTitle;}
    public function workCategory() { return $this->_workCategory;}
    public function workLink() { return $this->_workLink;}
    public function workDescription() { return $this->_workDescription;}

    
    // Setters:
    public function setId($id) {
        $id = (int) $id;
        
        if ($id > 0) {
            $this->_id = $id;
        }
    }
    
    public function setName($name) {
        
        if(is_string($name)) {
            $this->_name = $name;
        }
    }
    
     public function setWorkImg($workImg) {
        
        if(is_string($workImg)) {
            $this->_workImg = $workImg;
        }
    }
    
    public function setWorkTitle($workTitle) {
        
        if(is_string($workTitle)) {
            $this->_workTitle = $workTitle;
        }
    }
    
    public function setWorkCategory($workCategory) {
        
        if(is_string($workCategory)) {
            $this->_workCategory = $workCategory;
        }
    }
    
    public function setWorkLink($workLink) {
        
        if(is_string($workLink)) {
            $this->_workLink = $workLink;
        }
    }
    
    public function setWorkDescription($workDescription) {
        
        if(is_string($workDescription)) {
            $this->_workDescription = $workDescription;
        }
    }
   
}
