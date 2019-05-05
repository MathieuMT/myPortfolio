<?php
require_once 'Controllers/Frontend/UserController.php';
require_once 'Controllers/Frontend/WorkController.php';
require_once 'Controllers/Frontend/CertificateController.php';
require_once 'Controllers/Frontend/ContactController.php';
require_once 'Views/ViewFrontEnd.php';
require_once 'Views/ViewBackEnd.php';

class Rooter {
    
    private $_userCtrl;
    private $_workCtrl;
    private $_certificateCtrl;
    private $_contactCtrl;
    
    
    public function __construct (){
        $this->_userCtrl = new UserController();
        $this->_workCtrl = new WorkController();
        $this->_certificateCtrl = new CertificateController();
        $this->_contactCtrl = new ContactController();
    }
    
    public function rooterRequest() {
        
        
        try {
            
            if (isset($_GET['action'])) {
                
               if ($_GET['action'] == 'about') {
                    $this->_userCtrl->aboutUser();
                }
                elseif ($_GET['action'] == 'certificates') {
                   $this->_certificateCtrl->aboutCertificate();
               }
                elseif ($_GET['action'] == 'works') {
                    $this->_workCtrl->aboutWork();
               }
                elseif ($_GET['action'] == 'contact') {
                    $this->_contactCtrl->Contact();
                }
                else 
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