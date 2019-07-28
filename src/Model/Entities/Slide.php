<?php


namespace MathieuMT\myPortfolio\Model\Entities;


use MathieuMT\myPortfolio\Model\SlideDAO;
use MathieuMT\myPortfolio\Engine\ViewFrontEnd;



class Slide {
    private $_id,$_name,$_slideImg,$_work_id;
    
    
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
    public function slideImg() { return $this->_slideImg;}
    public function work_id() { return $this->_work_id;}
    

    
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
    
     public function setSlideImg($slideImg) {
        
        if(is_string($slideImg)) {
            $this->_slideImg = $slideImg;
        }
    }
    
    public function setWork_id($work_id) {
        
        if(is_string($work_id)) {
            $this->_work_id = $work_id;
        }
    }
    
}
