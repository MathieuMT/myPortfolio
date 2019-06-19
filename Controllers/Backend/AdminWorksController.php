<?php
require_once 'Models/Frontend/AdminWorksManager.php';
require_once 'Views/ViewBackEnd.php';


class AdminWorksController {
    
    
    private $manager;
    
    /*
    public function __construct() {
        $this->manager = new AdminWorksManager();
    }
    */
    
    
    // Affichage de la page de gestion des réalisations:
    public function showAdminWorks() {
        $view = new ViewBackEnd('adminWorksView');
        $view->generate([]);
    }
    
    
    
}