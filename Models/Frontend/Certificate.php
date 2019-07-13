<?php

require_once 'Models/Frontend/CertificateManager.php';

require_once 'Views/ViewFrontEnd.php';


class Certificate {
    private $_id,$_name,$_certificatImg,$_certificatTitle,$_certificatDescription,$_certificatCategory;
    
    
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
    public function certificatImg() { return $this->_certificatImg;}
    public function certificatTitle() { return $this->_certificatTitle;}
    public function certificatDescription() { return $this->_certificatDescription;}
    public function certificatCategory() { return $this->_certificatCategory;}

    
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
    
    public function setCertificatImg($certificatImg) {
        
        if(is_string($certificatImg)) {
            $this->_certificatImg = $certificatImg;
        }
    }
    
    public function setCertificatTitle($certificatTitle) {
        
        if(is_string($certificatTitle)) {
            $this->_certificatTitle = $certificatTitle;
        }
    }
    
    public function setCertificatDescription($certificatDescription) {
        
        if(is_string($certificatDescription)) {
            $this->_certificatDescription = $certificatDescription;
        }
    }
    
    
    public function setCertificatCategory($certificatCategory) {
        
        if(is_string($certificatCategory)) {
            $this->_certificatCategory = $certificatCategory;
        }
    }
    
    
}
