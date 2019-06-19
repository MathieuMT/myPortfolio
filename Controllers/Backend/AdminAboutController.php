<?php
require_once 'Models/Frontend/AdminAboutManager.php';
require_once 'Views/ViewBackEnd.php';


class AdminAboutController {
    
    
    private $manager;
    
    /*
    public function __construct() {
        $this->manager = new AdminAboutManager();
    }
    */
    
    
    // Affichage la page de gestion d'À Propos:
    public function showAdminAbout() {
        $view = new ViewBackEnd('adminAboutView');
        $view->generate([]);
    }
    
    
    
}