<?php

//require_once 'Models/Frontend/UserManager.php';
require_once 'Models/Frontend/User.php';
require_once 'Views/ViewFrontEnd.php';


class UserController {
    private $_user;
    
    
    
    public function __construct(){
        $this->_user = new UserManager();
        
        
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
