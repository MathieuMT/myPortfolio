<?php


namespace MathieuMT\myPortfolio\Controller;


use MathieuMT\myPortfolio\Model\UserDAO;
use MathieuMT\myPortfolio\Engine\ViewFrontEnd;





class UserController {
    private $_user;
    
    
    
    public function __construct(){
        $this->_user = new UserDAO();
        
        
    }
    
    
    
     //Show list of all users:
    
    public function aboutUser() {
        $aboutUser = $this->_user->getUserDescription();
        $view = new ViewFrontEnd('aboutView');
        $view->generate(array('aboutUser' => $aboutUser));
    }
    
    
    /*
    public function aboutUser($userId) {
        $aboutUser = $this->_user->getUser($userId);
        $view = new ViewFrontEnd('aboutView');
        $view->generate(array('aboutUser' => $aboutUser));
    }
    */
    
    
}
