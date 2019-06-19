<?php
require_once 'Controllers/Frontend/UserController.php';
require_once 'Controllers/Frontend/WorkController.php';
require_once 'Controllers/Frontend/CertificateController.php';
require_once 'Controllers/Frontend/ContactController.php';

require_once 'Controllers/Backend/PrivateFormsController.php';

require_once 'Controllers/Backend/AdminAboutController.php';
require_once 'Controllers/Backend/AdminCertificatesController.php';
require_once 'Controllers/Backend/AdminWorksController.php';
require_once 'Controllers/Backend/AdminProfileController.php';

require_once 'Controllers/Backend/LogoutController.php';

require_once 'Views/ViewFrontEnd.php';
require_once 'Views/ViewBackEnd.php';

class Rooter {
    
    private $_userCtrl;
    private $_workCtrl;
    private $_certificateCtrl;
    private $_contactCtrl;
    private $_privateFormsCtrl;
    private $_adminAboutCtrl;
    private $_adminCertificatesCtrl;
    private $_adminWorksCtrl;
    private $_adminProfileCtrl;
    private $_logoutCtrl;
    
    
    public function __construct (){
        $this->_userCtrl = new UserController();
        $this->_workCtrl = new WorkController();
        $this->_certificateCtrl = new CertificateController();
        $this->_contactCtrl = new ContactController();
        $this->_privateFormsCtrl = new PrivateFormsController();
        $this->_adminAboutCtrl = new AdminAboutController();
        $this->_adminCertificatesCtrl = new AdminCertificatesController();
        $this->_adminWorksCtrl = new AdminWorksController();
        $this->_adminProfileCtrl = new AdminProfileController();
        $this->_logoutCtrl = new LogoutController();
    }
    
    public function rooterRequest() {
        
        
        try {
            
            if (isset($_GET['action'])) {
                
               if ($_GET['action'] == 'about') {
                    $this->_userCtrl->aboutUser();
                }
                elseif ($_GET['action'] == 'adminAbout') {
                    $this->_adminAboutCtrl->showAdminAbout();
                }
                elseif ($_GET['action'] == 'adminProfile') {
                    $this->_adminProfileCtrl->showAdminProfile();
                }
                elseif ($_GET['action'] == 'certificates') {
                   $this->_certificateCtrl->aboutCertificates();
               }
                elseif ($_GET['action'] == 'adminCertificates') {
                    $this->_adminCertificatesCtrl->showAdminCertificates();
                }
                else if ($_GET['action'] == 'uploadCertificatesImages') {
                    
                   /*$uploadCertificatesImages = $this->getParameter($_FILES, 'certificatImg');
                     */  
                        
                    $this->_adminCertificatesCtrl->uploadCertImgs();
                   
                    
                }
                
                else if ($_GET['action'] == 'getCertificatImg') { 
                    $this->_adminCertificatesCtrl->getCertificatImg();
                }
                
                
                elseif ($_GET['action'] == 'works') {
                    $this->_workCtrl->aboutWorks();
               }
                elseif ($_GET ['action'] == 'adminWorks') {
                    $this->_adminWorksCtrl->showAdminWorks();
                }
                elseif ($_GET['action'] == 'contact') {
                    $this->_contactCtrl->Contact();
                }
                else if ($_GET['action'] == 'showPrivateForms') {
                    $this->_privateFormsCtrl->showPrivateForms();
                }
                else if ($_GET['action'] == 'registration') {
                    
                    
                    $usernameRegistered = $this->getParameter($_POST, 'usernameRegistered');
                    $passRegistered = $this->getParameter($_POST, 'passRegistered');
                    $checkPassRegistered = $this->getParameter($_POST, 'checkPassRegistered');
                    
                    
                    $this->_privateFormsCtrl->newUserRegistration($usernameRegistered, $passRegistered, $checkPassRegistered); 
                    
                    
                }
                else if ($_GET['action'] == 'connexion') {
                    
                    
                    $usernameConnected = $this->getParameter($_POST, 'usernameConnected');
                    $passConnected = $this->getParameter($_POST, 'passConnected');
                    
                    
                    $this->_privateFormsCtrl->loginUser($usernameConnected, $passConnected); 
                    
                    
                }else if ($_GET['action'] == 'logout') {
                    
                    $this->_logoutCtrl->logoutUser();
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