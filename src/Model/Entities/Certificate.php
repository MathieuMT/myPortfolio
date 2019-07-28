<?php

namespace MathieuMT\myPortfolio\Model\Entities;

use MathieuMT\myPortfolio\Model\CertificateDAO;
use MathieuMT\myPortfolio\Engine\ViewFrontEnd;


class Certificate {
    private $_id,$_name,$_certificatImg,$_certificatTitle,$_certificatDescription,$_certificatCategory;
    
    
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
