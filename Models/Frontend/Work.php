<?php

require_once 'Models/Frontend/WorkManager.php';

require_once 'Views/ViewFrontEnd.php';


class Work {
    private $_id,$_name,$_slug, $_category_id;
    
    
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
    public function slug() { return $this->_slug;}
    public function categiryid() { return $this->_category_id;}
    
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
    
    
    public function setSlug($slug) {
        
        if(is_string($slug)) {
            $this->_slug = $slug;
        }
    }
    
    
    public function setCategoryid($categoryid) {
        
        if (is_string($categoryid)) {
            $this->_category_id = $categoryid;
        }
    }
    
}
