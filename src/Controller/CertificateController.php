<?php


namespace MathieuMT\myPortfolio\Controller;

use MathieuMT\myPortfolio\Model\CertificateDAO;
use MathieuMT\myPortfolio\Engine\ViewFrontEnd;


class CertificateController {
    private $_certificate;

    public function __construct(){
        $this->_certificate = new CertificateDAO();
  
    }
    
     //Show list of all details of "aboutCertificates"
    public function aboutCertificates() {
        $aboutCertificate = $this->_certificate->getCertificateDescription();
        $view = new ViewFrontEnd('certificatesView');
        $view->generate(array('aboutCertificate' => $aboutCertificate));
    }

}
