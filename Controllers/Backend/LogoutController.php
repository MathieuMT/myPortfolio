<?php

require_once 'Views/ViewBackEnd.php';

class LogoutController {
    
    
    public function logoutUser() {
        
        if (isset($_SESSION['username'])) {
            
            unset ($_SESSION['id'], $_SESSION['username']);
            
            session_destroy();
            
            header('Location:index.php?action=about');
        }
        
    }
}