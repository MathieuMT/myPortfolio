<?php
require_once 'Models/Frontend/PrivateFormsManager.php';
require_once 'Views/ViewBackEnd.php';


class PrivateFormsController {
    
    
    private $manager;
    private $error;
    private $success;
    
    public function __construct() {
        $this->manager = new PrivateFormsManager();
    }
    
    // Affichage des formulaires privés d'inscription et de connexion:
    public function showPrivateForms() {
        $view = new ViewBackEnd('privateFormsView');
        $view->generate([]);
    }
    
    // Ajouter un nouvel utilisateur:
    public function newUserRegistration($usernameRegistered, $passRegistered, $checkPassRegistered) {
        
      
        
        /* Avoid injecting user code into the fields of the form (against the XSS flaw): */
        $usernameRegistered = htmlspecialchars($usernameRegistered);
        $passRegistered = htmlspecialchars($passRegistered);
        $checkPassRegistered = htmlspecialchars($checkPassRegistered);
        
        $checkParamsRegistered = $this->verifyParameters($usernameRegistered, $passRegistered, $checkPassRegistered);
        
        if ($checkParamsRegistered) {
            
            // Password hash:
            $hashPassRegistered = password_hash($passRegistered, PASSWORD_DEFAULT);
            
            $newUserRegistered = $this->manager->newUserRegistered($usernameRegistered, $hashPassRegistered);
            
            if ($newUserRegistered) {
                $this->success['registration'] = 'Votre inscription est bien enregistrée !';
            }
        }
        
        $view = new ViewBackEnd('privateFormsView');
        $view->generate(['error' => $this->error, 'success' => $this->success]); 
        
    }
    
    
    // Check parameters of the form of registration:
    private function verifyParameters($usernameRegistered, $passRegistered, $checkPassRegistered) {
        
        $usernameRegistered = $this->verifyUsernameRegistered($usernameRegistered);
        $checkPassRegistered = $this->verifyPassRegistered($passRegistered, $checkPassRegistered);
        $checkFieldRegistered = $this->verifyFieldEmptyRegistered($usernameRegistered, $passRegistered, $checkPassRegistered);
        
        if ($usernameRegistered && $checkPassRegistered && $checkFieldRegistered) {
            return true;
        }else {
            return false;
        }
        
    }
    
     // Check the nickname of the registrered user:
    private function verifyUsernameRegistered($usernameRegistered) {
        
        $check = true;
        
        // Check length nickname:
        /* We check that the nickname is between 3 and 25 characters */
        $lengthUsernameRegistered = strlen($usernameRegistered);
        if (($lengthUsernameRegistered < 3) || ($lengthUsernameRegistered > 25)) {
            
            $this->error['usernameRegistered'] = "Votre pseudo doit comprendre entre 3 et 25 caractères !";
            
            $check = false;  
        }
        
        // Check existing nickname:
        $existingUsernameRegistered = $this->manager->checkUsernameRegistered($usernameRegistered);
        if ($existingUsernameRegistered) {
            $this->error['usernameRegistered'] = "Votre pseudo est déjà utilisé !";
            
             $check = false;
        }
        return $check;
    }
    
    // Check the password l of the registrered user:
    private function verifyPassRegistered($passRegistered, $checkPassRegistered) {
        
        $check = true;
                
        // Check identicals passwords
        if ($passRegistered !== $checkPassRegistered) {
            $this->error['passRegistered'] = "Vos mots de passe ne correspondent pas !";
            $check = false;
        }
        return $check;
    }
    
    // Check the field of the form of the registrered user is not empty:
    private function verifyFieldEmptyRegistered($usernameRegistered, $passRegistered, $checkPassRegistered) {
        
        $check = true;
        
        // Check fields aren't empty
        if (empty($usernameRegistered) || empty($passRegistered) || empty($checkPassRegistered)) {
            $this->error['fieldRegistration'] = 'Tous les champs doivent être remplis!';
            
            $check = false;
        }
        return $check;
    }
    
    
    
} 