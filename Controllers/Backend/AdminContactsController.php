<?php
require_once 'Models/Frontend/AdminContactsManager.php';
require_once 'Views/ViewBackEnd.php';


class AdminContactsController {
    
    
    private $manager;
    
    /*
    public function __construct() {
        $this->manager = new AdminAboutManager();
    }
    */
    
    
    // Affichage la page de gestion du profil:
    public function showAdminAbout() {
        $view = new ViewBackEnd('adminContactsView');
        $view->generate([]);
    }
    
    
    
}