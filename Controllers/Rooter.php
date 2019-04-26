<?php
require_once 'Controllers/Frontend/UserController.php';
require_once 'Views/ViewFrontEnd.php';
require_once 'Views/ViewBackEnd.php';

class Rooter {
    
    private $_userCtrl;
    
    
    public function __construct (){
        $this->_userCtrl = new UserController();
    }
    
    public function rooterRequest() {
        
        
        try {
            
            if (isset($_GET['action'])) {
                
               if ($_GET['action'] == 'about') {
                    $this->_userCtrl->aboutUser();
                } else 
                   throw new Exception ('Pour la sécurité du site, vous ne pouvez pas modifier les paramètres de l\'url !');
                
            } else {
                $this->_userCtrl->aboutUser();
            }
           
        }
        catch (Exception $e) {
            $this->error($e->getMessage());
        }
        
    }
    
    
     private function error($errorMsg) {
        $view = new ViewFrontEnd("errorView");
        $view->generate(array('errorMsg' => $errorMsg));
    }
        
    // Search a parameter in a table:
    private function getParameter($table, $name) {
        if (isset($table[$name])) {
            return $table[$name];
    }
    else
        throw new Exception("Paramètre '$name' absent");
    }
    
}