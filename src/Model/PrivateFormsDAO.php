<?php


namespace MathieuMT\myPortfolio\Model;

use MathieuMT\myPortfolio\Model\Model;

class PrivateFormsDAO extends Model {
    
    
    //  Add a new user:
    public function newUserRegistered($usernameRegistered, $hashPassRegistered) {
        
        $sql = 'INSERT INTO users(username, pass) VALUES(:username, :pass)';
        
        $newUserRegistered = $this->executeRequest($sql, array('username' => $usernameRegistered, 'pass' => $hashPassRegistered));
        
        if ($newUserRegistered) {
            return true;
        } else {
            return false;
        }
    }
    
    // Check the nickname of the registrered user:
    public function checkUsernameRegistered($usernameRegistered) {
        
        $sql = 'SELECT * FROM users WHERE username = :username';
        
        $req = $this->executeRequest($sql, array('username' => $usernameRegistered));
        $result = $req->fetch();
        
        if ($result) {
            return true;
        }else {
            return false;
        }
    }
    
    
    
    public function connectedUser($usernameConnected) {
        
        // Good Username in db:
            $sql = 'SELECT * FROM users WHERE username = :username';

            $result = $this->executeRequest($sql, array('username'=>$usernameConnected));

            return $result->fetch();
        
    }
    
    
}