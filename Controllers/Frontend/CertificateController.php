<?php


require_once 'Models/Frontend/Certificate.php';
require_once 'Views/ViewFrontEnd.php';


class CertificateController {
    private $_certificate;
    
    
    
    public function __construct(){
        $this->_certificate = new CertificateManager();
        
        
    }
    
    
    
     //Show list of all details of "aboutCertificates"
    public function aboutCertificates() {
        $aboutCertificate = $this->_certificate->getCertificateDescription();
        $view = new ViewFrontEnd('certificatesView');
        $view->generate(array('aboutCertificate' => $aboutCertificate));
    }

}
