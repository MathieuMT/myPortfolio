<?php

namespace MathieuMT\myPortfolio\Controller;

use MathieuMT\myPortfolio\Model\AdminContactsDAO;
use MathieuMT\myPortfolio\Engine\ViewBackEnd;




class AdminContactsController {
    
    
    private $manager;
    
    
    public function __construct() {
        $this->manager = new AdminContactsDAO();
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