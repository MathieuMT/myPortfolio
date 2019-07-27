<?php
require_once 'Models/Frontend/AdminProfileManager.php';
require_once 'Views/ViewBackEnd.php';


class AdminProfileController {
   
    private $_adminProfile;
    
    private $avatar;
    private $miniAvatar;
    private $avatar_tmp;
    private $miniAvatar_tmp;
    private $avatarSize;
    private $miniAvatarSize;
    private $tailleMax;
    private $validExtensions;
    private $uploadExtension;
    
    
    public function __construct() {
        $this->_adminProfile = new AdminProfileManager();
    }
    
    
    
    // Affichage des details de l'utilisateur dans la page de gestion du profil:
    public function showAdminProfile($userId) {
        
        $user = $this->_adminProfile->getUser($userId);
        
        $view = new ViewBackEnd('adminProfileView');
        $view->generate(['user' => $user]);
    }
    
    
    /******** AVATAR ********/
    
    // Add a new avatar of the registered user:
    public function newAvatar($userId, $avatar) {
        
        $this->avatar = $_FILES['avatar_field']['name'];
        $this->avatar_tmp = $_FILES['avatar_field']['tmp_name'];
        $this->avatarSize = $_FILES['avatar_field']['size'];
        $this->validExtensions = array('jpg', 'jpeg', 'png', 'gif','JPG'); // Tableau des extensions acceptées à uploader.
        $this->uploadExtension = strtolower(substr(strrchr($_FILES['avatar_field']['name'], '.'), 1));
        
        // recover the extension of the image:
        if (!empty($this->avatar)) {
             
            
            $this->tailleMax =  2097152; // Limit size in bytes of the variable FILES to upload (here 2Mo).
            
            if ($this->avatarSize <= $this->tailleMax) {

                if (in_array($this->uploadExtension,$this->validExtensions)) {
                    
                    move_uploaded_file($this->avatar_tmp,'Content/img/users/avatars/'.$userId.'.'.$this->uploadExtension);
                    
                    if ($this->avatar == NULL) {
                        
                        $avatarUrl = $_SESSION['id'].'.'.$this->uploadExtension;
                        
                        $this->_adminProfile->addNewAvatar($avatarUrl, $userId);
                        
                        //$this->success['profileAvatar'] = 'Vous avez bien modifié votre avatar à votre profil'; 
                        
                        header('Location: index.php?action=adminProfile&id=' . $userId);
                        
                    }else {
                        
                        $avatarUrl = $_SESSION['id'].'.'.$this->uploadExtension;
                        
                        $this->_adminProfile->addNewAvatar($avatarUrl, $userId);
                        
                        //$this->success['profileAvatar'] = 'Vous avez bien modifié votre avatar à votre profil'; 
                        
                        header('Location: index.php?action=adminProfile&id=' . $userId);
                        
                    }
                    
                    
                    
                }else {
                    
                    //$this->error['profileAvatar'] = 'Votre avatar ou image de profil doit être au format jpg, jpeg, png ou gif pour être valide !';
                }
            
            }else {
                //$this->error['profileAvatar'] = 'Votre avatar ou image de profil ne doit pas dépasser 2Mo !';
            }
            
        }
        
        
        
        $user = $this->_adminProfile->getUser($userId);
        $view = new ViewBackEnd('adminProfileView');
        $view->generate(array('user' => $user));
        
    }
    
    
    public function deleteAvatar($userId) {
        
         /* DELETE FILE IMAGE AVATAR */
        $user = $this->_adminProfile->getUser($userId);
           
        $linkAvatarImg = 'Content/img/users/avatars/'.$user->avatar();
            
        unlink($linkAvatarImg);
        
        
        /* DELETE AVATAR IN BDD */
        $this->_adminProfile->deleteAvatar($userId);
        
        header('Location: index.php?action=adminProfile&id=' . $userId);

        
        $view = new ViewBackEnd('adminProfileView');
        $view->generate(array('user' => $user));
        
    }
    
    /********** END AVATAR ***********/
    
    
    
    
    
    
    
    /******** MINI-AVATAR ********/
    
    // Add a new avatar of the registered user:
    public function newMiniAvatar($userId, $miniAvatar) {
        
        $this->miniAvatar = $_FILES['mini_avatar_field']['name'];
        $this->miniAvatar_tmp = $_FILES['mini_avatar_field']['tmp_name'];
        $this->miniAvatarSize = $_FILES['mini_avatar_field']['size'];
        $this->validExtensions = array('jpg', 'jpeg', 'png', 'gif','JPG'); // Tableau des extensions acceptées à uploader.
        $this->uploadExtension = strtolower(substr(strrchr($_FILES['mini_avatar_field']['name'], '.'), 1));
        
        // recover the extension of the image:
        if (!empty($this->miniAvatar)) {
             
            
            $this->tailleMax =  2097152; // Limit size in bytes of the variable FILES to upload (here 2Mo).
            
            if ($this->miniAvatarSize <= $this->tailleMax) {

                if (in_array($this->uploadExtension,$this->validExtensions)) {
                    
                    move_uploaded_file($this->miniAvatar_tmp,'Content/img/users/mini_avatars/'.$userId.'.'.$this->uploadExtension);
                    
                    if ($this->miniAvatar == NULL) {
                        
                        $miniAvatarUrl = $_SESSION['id'].'.'.$this->uploadExtension;
                        
                        $this->_adminProfile->addNewMiniAvatar($miniAvatarUrl, $userId);
                        
                        //$this->success['profileAvatar'] = 'Vous avez bien modifié votre avatar à votre profil'; 
                        
                        header('Location: index.php?action=adminProfile&id=' . $userId);
                        
                    }else {
                        
                        $miniAvatarUrl = $_SESSION['id'].'.'.$this->uploadExtension;
                        
                        $this->_adminProfile->addNewMiniAvatar($miniAvatarUrl, $userId);
                        
                        //$this->success['profileAvatar'] = 'Vous avez bien modifié votre avatar à votre profil'; 
                        
                        header('Location: index.php?action=adminProfile&id=' . $userId);
                        
                    }
                    
                    
                    
                }else {
                    
                    //$this->error['profileAvatar'] = 'Votre avatar ou image de profil doit être au format jpg, jpeg, png ou gif pour être valide !';
                }
            
            }else {
                //$this->error['profileAvatar'] = 'Votre avatar ou image de profil ne doit pas dépasser 2Mo !';
            }
            
        }
        
        
        
        $user = $this->_adminProfile->getUser($userId);
        $view = new ViewBackEnd('adminProfileView');
        $view->generate(array('user' => $user));
        
    }
    
    
    public function deleteMiniAvatar($userId) {
        
         /* DELETE FILE IMAGE AVATAR */
        $user = $this->_adminProfile->getUser($userId);
           
        $linkAvatarImg = 'Content/img/users/mini_avatars/'.$user->mini_avatar();
            
        unlink($linkAvatarImg);
        
        
        /* DELETE AVATAR IN BDD */
        $this->_adminProfile->deleteMiniAvatar($userId);
        
        header('Location: index.php?action=adminProfile&id=' . $userId);

        
        $view = new ViewBackEnd('adminProfileView');
        $view->generate(array('user' => $user));
        
    }
    
    
    /************** END MINI-AVATAR ********************/
    
    
    
    
    
    
    
    
    /************** USERNAME ********************/
    
    
    
    // Update username of the registered user:
    public function editUsername($userId, $newUsername) {
        
        $newUsername = htmlspecialchars($newUsername);
        $user = $this->_adminProfile->getUser($userId);
        
        // To change the username according to the user's id:
        if (isset($newUsername) and !empty($newUsername) and $newUsername != $user->username()) {
            
            $this->_adminProfile->updateUsername($userId, $newUsername);
            
            unset($_SESSION['username']);
            
            $_SESSION['username'] = $newUsername;
            
            header('Location: index.php?action=adminProfile&id=' . $userId);
                
        }
        
        $view = new ViewBackEnd('adminProfileView');
        $view->generate(array('user' => $user));
        
    }
    
    
    
    /************** END USERNAME ********************/
    
    
    
    
    
    
    
    
    /************** FIRSTNAME ********************/
    
    
    
    // Update firstname of the registered user:
    public function editFirstname($userId, $newFirstname) {
        
        $newFirstname = htmlspecialchars($newFirstname);
        $user = $this->_adminProfile->getUser($userId);
        
        // To change the firstname according to the user's id:
        if (isset($newFirstname) and !empty($newFirstname) and $newFirstname != $user->firstname()) {
            
            $this->_adminProfile->updateFirstname($userId, $newFirstname);
            
            unset($_SESSION['firstname']);
            
            $_SESSION['firstname'] = $newFirstname;
            
            header('Location: index.php?action=adminProfile&id=' . $userId);
                
        }
        
        $view = new ViewBackEnd('adminProfileView');
        $view->generate(array('user' => $user));
        
    }
    
    
    
    /************** END FIRSTNAME ********************/
    
    
    
    
    
    
    
    /************** LASTNAME ********************/
    
    
    
    // Update lastname of the registered user:
    public function editLastname($userId, $newLastname) {
        
        $newLastname = htmlspecialchars($newLastname);
        $user = $this->_adminProfile->getUser($userId);
        
        // To change the lastname according to the user's id:
        if (isset($newLastname) and !empty($newLastname) and $newLastname != $user->lastname()) {
            
            $this->_adminProfile->updateLastname($userId, $newLastname);
            
            unset($_SESSION['lastname']);
            
            $_SESSION['lastname'] = $newLastname;
            
            header('Location: index.php?action=adminProfile&id=' . $userId);
                
        }
        
        $view = new ViewBackEnd('adminProfileView');
        $view->generate(array('user' => $user));
        
    }
    
    
    
    /************** END LASTNAME ********************/
    
     
    
    
    
    
    /************** EMAIL ********************/
    
    // Update the e-mail of the registered user:
    public function editEmail($userId, $newEmail) {
        
        $newEmail = htmlspecialchars($newEmail);
        $user = $this->_adminProfile->getUser($userId);
        
            // To change the e-mail according to the user's id:
        if (isset($newEmail) and !empty($newEmail) and $newEmail != $user->email()) {
            
            
            if ($newEmail != NULL) {
                $this->_adminProfile->updateEmail($userId, $newEmail);

            } /*else {
            
                //$this->error['profileEmail'] = 'L\'adresse e-mail suivante: "' . $newEmail . '" est déjà prise !';
            }*/
            header('Location: index.php?action=adminProfile&id=' . $userId);
        } 

        
        $view = new ViewBackEnd('adminProfileView');
        $view->generate(array('user' => $user));

    }
    
    
    public function deleteEmail($userId) {
        
        /* DELETE EMAIL IN BDD */
        $user = $this->_adminProfile->getUser($userId);
        $this->_adminProfile->deleteEmail($userId);
        
        header('Location: index.php?action=adminProfile&id=' . $userId);

        
        $view = new ViewBackEnd('adminProfileView');
        $view->generate(array('user' => $user));
        
    }
    
    /************** END EMAIL ********************/
    
    
    
    
    
    
    /************** PASS ********************/
    
    // Update the password of the registered user:
    public function editPass($userId, $newPass1, $newPass2) {
        
        
        // To change the password according to the user's id:
        if (isset($newPass1) and !empty($newPass1) and isset($newPass2) and !empty($newPass2)) {
            $newPass1 = htmlspecialchars($newPass1);
            $newPass2 = htmlspecialchars($newPass2);

            $user = $this->_adminProfile->getUser($userId);

            if ($newPass1 == $newPass2) {
                $newPass1_hache = password_hash($newPass1, PASSWORD_DEFAULT);
                $newPass2_hache = password_hash($newPass2, PASSWORD_DEFAULT);

                $this->_adminProfile->updatePass($userId, $newPass1_hache);
                
                 header('Location: index.php?action=adminProfile&id=' . $userId);

            } /*else {
                //$this->error['profilePass'] =  'Vos deux mots de passes ne correspondent pas !';
                
                header('Location: index.php?action=showProfile&id=' . $profileId);
            }*/

                $view = new ViewBackEnd('adminProfileView');
                $view->generate(array('user' => $user));

            }
    }
    
    /************** END PASS ********************/
    
    
    
    
    
    
    
    
    /************** PROFESSION ********************/
    
    
    
    // Update profession of the registered user:
    public function editProfession($userId, $newProfession) {
        
        $newProfession = htmlspecialchars($newProfession);
        $user = $this->_adminProfile->getUser($userId);
        
        // To change the profession according to the user's id:
        if (isset($newProfession) and !empty($newProfession) and $newProfession != $user->profession()) {
            
            $this->_adminProfile->updateProfession($userId, $newProfession);
            
            unset($_SESSION['profession']);
            
            $_SESSION['profession'] = $newProfession;
            
            header('Location: index.php?action=adminProfile&id=' . $userId);
                
        }
        
        $view = new ViewBackEnd('adminProfileView');
        $view->generate(array('user' => $user));
        
    }
    
    
    public function deleteProfession($userId) {
        
        /* DELETE EMAIL IN BDD */
        $user = $this->_adminProfile->getUser($userId);
        $this->_adminProfile->deleteProfession($userId);
        
        header('Location: index.php?action=adminProfile&id=' . $userId);

        
        $view = new ViewBackEnd('adminProfileView');
        $view->generate(array('user' => $user));
        
    }
    
    
    /************** END PROFESSION ********************/
    
    
    
    
    
    
    /************** DESCRIPTION ********************/
    
    
    
    // Update profession of the registered user:
    public function editDescription($userId, $newDescription) {
        
        $newDescription =  nl2br(htmlspecialchars($newDescription));
        $user = $this->_adminProfile->getUser($userId);
        
        // To change the description according to the user's id:
        if (isset($newDescription) and !empty($newDescription) and $newDescription != $user->description()) {
            
            $this->_adminProfile->updateDescription($userId, $newDescription);
            
            unset($_SESSION['description']);
            
            $_SESSION['description'] = $newDescription;
            
            header('Location: index.php?action=adminProfile&id=' . $userId);
                
        }
        
        $view = new ViewBackEnd('adminProfileView');
        $view->generate(array('user' => $user));
        
    }
    
    
    public function deleteDescription($userId) {
        
        /* DELETE EMAIL IN BDD */
        $user = $this->_adminProfile->getUser($userId);
        $this->_adminProfile->deleteDescription($userId);
        
        header('Location: index.php?action=adminProfile&id=' . $userId);

        
        $view = new ViewBackEnd('adminProfileView');
        $view->generate(array('user' => $user));
        
    }
    
    
    /************** END DESCRIPTION ********************/
    
    
    
    
    
    
    
    
}