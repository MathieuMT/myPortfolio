<?php
require_once 'Models/Frontend/AdminProfileManager.php';
require_once 'Views/ViewBackEnd.php';


class AdminProfileController {
    
    
    private $manager;
    
    /*
    public function __construct() {
        $this->manager = new AdminProfileManager();
    }
    */
    
    
    // Affichage de la page de gestion du profil:
    public function showAdminProfile() {
        $view = new ViewBackEnd('adminProfileView');
        $view->generate([]);
    }
    
    
    
}