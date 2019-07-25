<?php
require_once 'Models/Frontend/PrivateFormsManager.php';
require_once 'Views/ViewBackEnd.php';


class PrivateFormsController {
    
    
    private $manager;
    private $success1;
    private $success2;
    private $error1;
    private $error2;
    private $error3;
    private $error4;
    private $error5;
    
    
    public function __construct() {
        $this->manager = new PrivateFormsManager();
    }
    
    // Affichage des formulaires privés d'inscription et de connexion:
    public function showPrivateForms() {
        $view = new ViewBackEnd('privateFormsView');
        $view->generate([]);
    }
    
  
    
    /* FORMULAIRE D'INSCRIPTION */
    
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
                $this->success1['registration'] = 'Votre inscription est bien enregistrée !';
            }
        }
      
        $view = new ViewBackEnd('privateFormsView');
        $view->generate(['error1' => $this->error1, 'error2' => $this->error2, 'error3' => $this->error3, 'success1' => $this->success1]); 
       
       /* header('Location: index.php');*/
    }
    
    
    // Check parameters of the form of registration:
    private function verifyParameters($usernameRegistered, $passRegistered, $checkPassRegistered) {
        
        $usernameRegistered = $this->verifyUsernameRegistered($usernameRegistered);
        $checkPassRegistered = $this->verifyPassRegistered($passRegistered, $checkPassRegistered);
        
        
        if ($usernameRegistered && $checkPassRegistered) {
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
            
            $this->error1['usernameRegistered'] = "Votre pseudo doit comprendre entre 3 et 25 caractères !";
            
            $check = false;  
        }
        
        // Check existing nickname:
        $existingUsernameRegistered = $this->manager->checkUsernameRegistered($usernameRegistered);
        if ($existingUsernameRegistered) {
            $this->error2['usernameRegistered'] = "Votre pseudo est déjà utilisé !";
            
             $check = false;
        }
        return $check;
    }
    
    // Check the password l of the registrered user:
    private function verifyPassRegistered($passRegistered, $checkPassRegistered) {
        
        $check = true;
                
        // Check identicals passwords
        if ($passRegistered !== $checkPassRegistered) {
            $this->error3['passRegistered'] = "Vos mots de passe ne correspondent pas !";
            $check = false;
        }
        return $check;
    }
    
    
    
    /* FORMULAIRE DE CONNEXION */
    
    public function loginUser($usernameConnected, $passConnected) {
        
        /* Avoid injecting user code into the fields of the form (against the XSS flaw): */        
        $usernameConnected = htmlspecialchars($usernameConnected);
        $passConnected = htmlspecialchars($passConnected);
        
        
        
        $userRegistered = $this->manager->connectedUser($usernameConnected);
        $isPasswordCorrect =  password_verify($passConnected, $userRegistered['pass']);
        
        
        
        
        if (!empty($usernameConnected) || !empty($passConnected)) {
            if ($userRegistered) {
                if ($isPasswordCorrect) {

                        
                            
                        $_SESSION['id'] = $userRegistered['id'];
                               
                        $_SESSION['username'] = $userRegistered['username'];
                               
                            
                        $this->success2['connexion'] = 'Vous êtes bien connecté !';
                            
                            
                                
                        header('Location: index.php?action=about');

                            
                                           

               }else {
                   //Le return la aussi
                   $this->error4['connexion'] = 'Votre nom d\'utilisateur ou mot de passe est invalide !';
               }
           }else {
               $this->error5['connexion'] = 'Vous n\'êtes pas inscrit !';

               header('Location:index.php?action=showPrivateForms');
           } 
       }
        
        $view = new ViewBackEnd('privateFormsView');
        $view->generate(['error4' => $this->error4, 'error5' => $this->error5, 'success2' => $this->success2]);
        
        exit();
        
    }
         
    
} 