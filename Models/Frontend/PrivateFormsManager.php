<?php
/*require_once 'Models/Frontend/User.php';*/
require_once 'Models/Model.php';

class PrivateFormsManager extends Model {
    
    
    //  Add a new user:
    public function newUserRegistered($usernameRegistered, $hashPassRegistered) {
        
        $sql = 'INSERT INTO users(username, pass) VALUES(:username, :pass,)';
        
        $newUserRegistered = $this->executeQuery($sql, array('username' => $usernameRegistered, 'pass' => $hashPassRegistered));
        
        if ($newUserRegistered) {
            return true;
        } else {
            return false;
        }
    }
    
    // Check the nickname of the registrered user:
    public function checkUsernameRegistered($usernameRegistered) {
        
        $sql = 'SELECT * FROM users WHERE username = :username';
        
        $req = $this->executeQuery($sql, array('username' => $usernameRegistered));
        $result = $req->fetch();
        
        if ($result) {
            return true;
        }else {
            return false;
        }
    }
    
}