<?php
require_once 'Models/Frontend/AdminContactsManager.php';
require_once 'Views/ViewBackEnd.php';


class AdminContactsController {
    
    
    private $manager;
    
    
    public function __construct() {
        $this->manager = new AdminContactsManager();
    }
    
    
    
    // Affichage de la page de gestion des contacts:
    public function showAdminContact() {
        
        $aboutContact = $this->manager->getContactDescription();
        
        $view = new ViewBackEnd('adminContactsView');
        $view->generate(['aboutContact' => $aboutContact]);
    }
    
    // Delete a post:
    public function removeContact() {

        if (isset($_POST['submit_delete_contact'])) {
            
            $contactId = $_POST['contactId'];
            
            $deleteContact= $this->manager->deleteContact($contactId);

        }
        
        header('Location: index.php?action=adminContacts');
        
        
        
        exit();
    }
    
}