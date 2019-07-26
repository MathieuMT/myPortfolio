<?php
require_once 'Controllers/Frontend/UserController.php';
require_once 'Controllers/Frontend/WorkController.php';
require_once 'Controllers/Frontend/CertificateController.php';
require_once 'Controllers/Frontend/ContactController.php';

require_once 'Controllers/Backend/PrivateFormsController.php';

require_once 'Controllers/Backend/AdminContactsController.php';
require_once 'Controllers/Backend/AdminCertificatesController.php';
require_once 'Controllers/Backend/AdminWorksController.php';
require_once 'Controllers/Backend/AdminWorkController.php';
require_once 'Controllers/Backend/AdminProfileController.php';

require_once 'Controllers/Backend/LogoutController.php';

require_once 'Views/ViewFrontEnd.php';
require_once 'Views/ViewBackEnd.php';

class Rooter {
   
    private $_userCtrl;
    private $_workCtrl;
    private $_certificateCtrl;
    private $_contactCtrl;
    private $_privateFormsCtrl;
    private $_adminContactsCtrl;
    private $_adminCertificatesCtrl;
    private $_adminWorksCtrl;
    private $_adminWorkCtrl;
    private $_adminProfileCtrl;
    private $_logoutCtrl;
    
    
    public function __construct (){
        $this->_userCtrl = new UserController();
        $this->_workCtrl = new WorkController();
        $this->_certificateCtrl = new CertificateController();
        $this->_contactCtrl = new ContactController();
        $this->_privateFormsCtrl = new PrivateFormsController();
        $this->_adminContactsCtrl = new AdminContactsController();
        $this->_adminCertificatesCtrl = new AdminCertificatesController();
        $this->_adminWorksCtrl = new AdminWorksController();
        $this->_adminWorkCtrl = new AdminWorkController();
        $this->_adminProfileCtrl = new AdminProfileController();
        $this->_logoutCtrl = new LogoutController();
    }
    
    public function rooterRequest() {
        
        
        try {
            
            if (isset($_GET['action'])) {
                
               if ($_GET['action'] == 'about') {
                   
                  $this->_userCtrl->aboutUser();
                    
                }
                
                
                
                elseif ($_GET['action'] == 'adminProfile') {

                     $userId = intval($this->getParameter($_GET, 'id'));
                        if ($userId > 0) {
                            $this->_adminProfileCtrl->showAdminProfile($userId);
                        }
                        else
                            throw new Exception("Identifiant du profil de l'utilisateur non valide");
                }
                else if ($_GET['action'] == 'profileAvatar') {
                    
                    $userId = intval($this->getParameter($_GET, 'id'));
                    if ($userId > 0) {
                        
                        $avatar = $this->getParameter($_FILES, 'avatar_field');
                      
                        $this->_adminProfileCtrl->newAvatar($userId, $avatar);
                    }
                }
                else if ($_GET['action'] == 'profileDeleteAvatar') {
                    
                    $userId = intval($this->getParameter($_GET, 'id'));
                    if ($userId > 0) {
                        
                        $this->_adminProfileCtrl->deleteAvatar($userId);
                    }
                }
                else if ($_GET['action'] == 'profileMiniAvatar') {
                    
                    $userId = intval($this->getParameter($_GET, 'id'));
                    if ($userId > 0) {
                        
                        $miniAvatar = $this->getParameter($_FILES, 'mini_avatar_field');
                      
                        $this->_adminProfileCtrl->newMiniAvatar($userId, $miniAvatar);
                    }
                }
                else if ($_GET['action'] == 'profileDeleteMiniAvatar') {
                    
                    $userId = intval($this->getParameter($_GET, 'id'));
                    if ($userId > 0) {
                        
                        $this->_adminProfileCtrl->deleteMiniAvatar($userId);
                    }
                }
                else if ($_GET['action'] == 'profileUsername') {
                    
                    $newUsername = $this->getParameter($_POST, 'newUsername');
                    
                    $userId = intval($this->getParameter($_GET, 'id'));
                    
                    if ($userId > 0) {
                        
                        $this->_adminProfileCtrl->editUsername($userId, $newUsername);
                    }
                }
                else if ($_GET['action'] == 'profileFirstname') {
                    
                    $newFirstname = $this->getParameter($_POST, 'newfirstname');
                    
                    $userId = intval($this->getParameter($_GET, 'id'));
                    
                    if ($userId > 0) {
                        
                        $this->_adminProfileCtrl->editFirstname($userId, $newFirstname);
                    }
                }
                else if ($_GET['action'] == 'profileLastname') {
                    
                    $newLastname = $this->getParameter($_POST, 'newlastname');
                    
                    $userId = intval($this->getParameter($_GET, 'id'));
                    
                    if ($userId > 0) {
                        
                        $this->_adminProfileCtrl->editLastname($userId, $newLastname);
                    }
                }
                else if ($_GET['action'] == 'profileEmail') {
                    
                    $newEmail = $this->getParameter($_POST, 'newemail');
                    
                    $userId = intval($this->getParameter($_GET, 'id'));
                    
                    if ($userId > 0) {
                        
                        $this->_adminProfileCtrl->editEmail($userId, $newEmail);
                    }                    
                }
                else if ($_GET['action'] == 'profileDeleteEmail') {
                    
                    $userId = intval($this->getParameter($_GET, 'id'));
                    if ($userId > 0) {
                        
                        $this->_adminProfileCtrl->deleteEmail($userId);
                    }
                }
                else if ($_GET['action'] == 'profilePass') {
                    
                    $newPass1 = $this->getParameter($_POST, 'newPass1');
                    $newPass2 = $this->getParameter($_POST, 'newPass2');
                    
                    $userId = intval($this->getParameter($_GET, 'id'));
                    
                    if ($userId > 0) {
                        
                        $this->_adminProfileCtrl->editPass($userId, $newPass1, $newPass2);
                    }  
                    
                }
                else if ($_GET['action'] == 'profileProfession') {
                    
                    $newProfession = $this->getParameter($_POST, 'newprofession');
                    
                    $userId = intval($this->getParameter($_GET, 'id'));
                    
                    if ($userId > 0) {
                        
                        $this->_adminProfileCtrl->editProfession($userId, $newProfession);
                    }
                }
                else if ($_GET['action'] == 'profileDeleteProfession') {
                    
                    $userId = intval($this->getParameter($_GET, 'id'));
                    if ($userId > 0) {
                        
                        $this->_adminProfileCtrl->deleteProfession($userId);
                    }
                }
                else if ($_GET['action'] == 'profileDescription') {
                    
                    $newDescription = $this->getParameter($_POST, 'newDescription');
                    
                    $userId = intval($this->getParameter($_GET, 'id'));
                    
                    if ($userId > 0) {
                        
                        $this->_adminProfileCtrl->editDescription($userId, $newDescription);
                    }
                }
                else if ($_GET['action'] == 'profileDeleteDescription') {
                    
                    $userId = intval($this->getParameter($_GET, 'id'));
                    if ($userId > 0) {
                        
                        $this->_adminProfileCtrl->deleteDescription($userId);
                    }
                }
                
                
                
                
                else if ($_GET['action'] == 'certificates') {
                   $this->_certificateCtrl->aboutCertificates();
               }
                elseif ($_GET['action'] == 'adminCertificates') {
                    $this->_adminCertificatesCtrl->showAdminCertificates();
                }
                else if ($_GET['action'] == 'uploadCertificatesImages') {
                    $this->_adminCertificatesCtrl->uploadCertImgs();
                }
                else if ($_GET['action'] == 'sendCertificateDetails') {
                    
                    $certificateName = $this->getParameter($_POST, 'certificateName');
                    $certificateTitle = $this->getParameter($_POST, 'certificateTitle');
                    $certificateDescription = $this->getParameter($_POST, 'certificateDescription');
                    $certificateId = $this->getParameter($_POST, 'certificateId');
                    
                    if ($certificateId > 0) {
                            $this->_adminCertificatesCtrl->sendCertificateDetails($certificateName, $certificateTitle, $certificateDescription, $certificateId);
                        }
                    else
                            throw new Exception("Identifiant du certificat non valide");  
                }
                else if ($_GET['action'] == 'works') {
                    $this->_workCtrl->aboutWorks();
               }
                else if ($_GET ['action'] == 'adminWorks') {
                    $this->_adminWorksCtrl->showAdminWorks();
                }
                else if ($_GET ['action'] == "adminWork") {
                    $workId = intval($this->getParameter($_GET, 'id'));
                        if ($workId > 0) {
                            $this->_adminWorkCtrl->showAdminWork($workId);
                        }
                        else
                            throw new Exception("Identifiant du projet non valide");
             
                }
                
                
                else if ($_GET['action'] == 'uploadWorksImages') {
                    $this->_adminWorksCtrl->uploadWorkImgs();
                }
                else if ($_GET['action'] == 'sendWorkDetails') {
                    $workName = $this->getParameter($_POST, 'workName');
                    $workTitle = $this->getParameter($_POST, 'workTitle');
                    $workDescription = $this->getParameter($_POST, 'workDescription');
                    $workCategory = $this->getParameter($_POST, 'workCategory');
                    $workLink = $this->getParameter($_POST, 'workLink');
                    $workId = $this->getParameter($_POST, 'workId');
                    
                    if ($workId > 0) {
                            $this->_adminWorksCtrl->sendWorkDetails($workName, $workTitle, $workDescription, $workCategory, $workLink, $workId);
                        }
                    else
                            throw new Exception("Identifiant du projet non valide");
                }
                else if ($_GET['action'] == 'uploadSlidesImages') {
                    $this->_adminWorkCtrl->uploadSlideImgs();
                }
                else if ($_GET['action'] == 'sendSlideDetails') {
                    
                    $work_id = $this->getParameter($_POST, 'work_id_slide');
                    $slideName = $this->getParameter($_POST, 'slideName');
                    $slideId = $this->getParameter($_POST, 'slideId');
                    
                    if ($slideId > 0) {
                            $this->_adminWorkCtrl->sendSlideDetails($slideName, $slideId, $work_id);
                        }
                    else
                            throw new Exception("Identifiant du diapositif non valide");
                }
                
                else if ($_GET['action'] == 'contact') {
                    $this->_contactCtrl->Contact();
                }
                else if ($_GET['action'] == 'submitContactData') {
                    
                    $contactFirstName = $this->getParameter($_POST, 'contactFirstName1');
                    $contactLastName = $this->getParameter($_POST, 'contactLastName1');
                    $contactEmail = $this->getParameter($_POST, 'contactEmail1');
                    $contactObject = $this->getParameter($_POST, 'contactObject1');
                    $contactMsg = $this->getParameter($_POST, 'contactMsg1');
                    
                    $this->_contactCtrl-> newContactInDB($contactFirstName, $contactLastName, $contactEmail, $contactObject, $contactMsg);
                }
                
                elseif ($_GET['action'] == 'adminContacts') {
                    $this->_adminContactsCtrl->showAdminContact();
                }
                
                else if ($_GET['action'] == 'deleteContact') {

                    $this->_adminContactsCtrl->removeContact();
             
                }
                
                
                
                else if ($_GET['action'] == 'showPrivateForms') {
                    $this->_privateFormsCtrl->showPrivateForms();
                }
                else if ($_GET['action'] == 'registration') {
                    
                    
                    $usernameRegistered = $this->getParameter($_POST, 'usernameRegistered');
                    $passRegistered = $this->getParameter($_POST, 'passRegistered');
                    $checkPassRegistered = $this->getParameter($_POST, 'checkPassRegistered');
                    
                    
                    $this->_privateFormsCtrl->newUserRegistration($usernameRegistered, $passRegistered, $checkPassRegistered); 
                    
                    
                }
                else if ($_GET['action'] == 'connexion') {
                    
                    
                    $usernameConnected = $this->getParameter($_POST, 'usernameConnected');
                    $passConnected = $this->getParameter($_POST, 'passConnected');
                    
                    
                    $this->_privateFormsCtrl->loginUser($usernameConnected, $passConnected); 
                    
                    
                }else if ($_GET['action'] == 'logout') {
                    
                    $this->_logoutCtrl->logoutUser();
                }
                else 
                   throw new Exception ('Pour la sécurité du site, vous ne pouvez pas modifier les paramètres de l\'url !');
                
            } else {
                $this->_userCtrl->aboutUser();
            }
           
        }
        catch (Exception $e) {
            $this->error($e->getMessage());
        }
        
    }
    
    
     private function error($errorMsg) {
        $view = new ViewFrontEnd("errorView");
        $view->generate(array('errorMsg' => $errorMsg));
    }
        
    // Search a parameter in a table:
    private function getParameter($table, $name) {
        if (isset($table[$name])) {
            return $table[$name];
        }
        else
            throw new Exception("Paramètre '$name' absent");
    }
    
}