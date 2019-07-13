<?php

require_once 'Models/Frontend/WorkManager.php';

require_once 'Views/ViewFrontEnd.php';


class Work {
    private $_id,$_name,$_workImg,$_workTitle,$_workDescription,$_workCategory, $_workLink;
    
    
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
