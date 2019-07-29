<?php

namespace MathieuMT\myPortfolio\Controller;

use MathieuMT\myPortfolio\Engine\ViewBackEnd;

class LogoutController {
    
    
    public function logoutUser() {
        
        if (isset($_SESSION['username'])) {
            
            unset ($_SESSION['id'], $_SESSION['username']);
            
            session_destroy();
            
            header('Location:index.php?action=about');
        }
        
    }
}