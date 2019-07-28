<?php

namespace MathieuMT\myPortfolio\Model;

use MathieuMT\myPortfolio\Model\Entities\User;
use MathieuMT\myPortfolio\Model\Model;


class AdminProfileDAO extends Model{
     /************* INFORMATIONS DE CHAQUE UTILISATEUR ***************/

     // Returns informations on an user:
    public function getUser($userId) {
        
        $sql ='SELECT * FROM users WHERE id = ?';
        
        $user = $this->executeRequest($sql, array($userId));
        
        if ($user->rowCount() > 0)
            return new User($user->fetch()); // Access to the first result line.
        else
            throw new Exception("Aucun utilisateur ne correspond à l'identifiant '$userId'");
    }
   
    /*************************************************************************/
    
    
    /******** AVATAR ********/
    
    // Add a new avatar for the profil of the registered user:
    public function addNewAvatar($avatar, $userId) {
        
        // Create an "avatar" entry in the database:
        $sql = 'UPDATE users SET avatar = :avatar WHERE id = :id ';
        $result = $this->executeRequest($sql, array(
                'avatar' => $avatar,
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
 
    }
    
    // Delete avatar of the registered user in the database:
    public function deleteAvatar($userId) {
        $sql = 'UPDATE users SET avatar = NULL WHERE id = :id ';
        $result = $this->executeRequest($sql, array(
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
        
    }
    
    
    
    
    
    /******** MINI-AVATAR ********/
    
     // Add a new avatar for the profil of the registered user:
    public function addNewMiniAvatar($miniAvatar, $userId) {
        
        // Create an "avatar" entry in the database:
        $sql = 'UPDATE users SET mini_avatar = :mini_avatar WHERE id = :id ';
        $result = $this->executeRequest($sql, array(
                'mini_avatar' => $miniAvatar,
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
 
    }
    
    // Delete avatar of the registered user in the database:
    public function deleteMiniAvatar($userId) {
        $sql = 'UPDATE users SET mini_avatar = NULL WHERE id = :id ';
        $result = $this->executeRequest($sql, array(
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
        
    }
    
    
    /********* USERNAME *********/
    
    // Update username of the registered user in the database:
    public function updateUsername($userId, $newUsername) {
        
        
        $sql = 'UPDATE users SET username = :username WHERE id = :id ';
        
        $result = $this->executeRequest($sql, array(
                'username' => $newUsername,
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
        
    }
    
    
    /********* FIRSTNAME *********/
    
    // Update firstname of the registered user in the database:
    public function updateFirstname($userId, $newFirstname) {
        
        
        $sql = 'UPDATE users SET firstname = :firstname WHERE id = :id ';
        
        $result = $this->executeRequest($sql, array(
                'firstname' => $newFirstname,
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
        
    }
    
    
    
    
    /********* LASTNAME *********/
    
    // Update lastname of the registered user in the database:
    public function updateLastname($userId, $newLastname) {
        
        
        $sql = 'UPDATE users SET lastname = :lastname WHERE id = :id ';
        
        $result = $this->executeRequest($sql, array(
                'lastname' => $newLastname,
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
        
    }
    
    
    
    
    
    /********* EMAIL *********/
    
    // Update the e-mail of the registered user in the database:
    public function updateEmail($userId, $newEmail) {
        
        $sql = 'SELECT * FROM users WHERE email = ?';
        
        $reqEmail = $this->executeRequest($sql, array ($newEmail));
        
        $emailExist = $reqEmail->rowCount();
        
        if ($emailExist == 0) {
            $sql = 'UPDATE users SET email = :email WHERE id = :id ';
            $result = $this->executeRequest($sql, array ('email' => $newEmail, 'id' => $_SESSION['id']));
            
            return $result;
        }else {
            return $emailExist;
        }
    }
    
    // Delete email of the registered user in the database:
    public function deleteEmail($userId) {
        $sql = 'UPDATE users SET email = NULL WHERE id = :id ';
        $result = $this->executeRequest($sql, array(
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
        
    }
    
    /********* PASS *********/
    
    // Update the password of the registered user in the database:
    public function updatePass($userId, $newPass1_hache) {
        
        $sql = 'UPDATE users SET pass = :pass WHERE id = :id';
        
        $result = $this->executeRequest($sql, array(
                'pass' => $newPass1_hache,
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
        
    }
    
    
    
    /********* PROFESSION *********/
    
    // Update profession of the registered user in the database:
    public function updateProfession($userId, $newProfession) {
        
        
        $sql = 'UPDATE users SET profession = :profession WHERE id = :id ';
        
        $result = $this->executeRequest($sql, array(
                'profession' => $newProfession,
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
        
    }
    
    // Delete profession of the registered user in the database:
    public function deleteProfession($userId) {
        $sql = 'UPDATE users SET profession = NULL WHERE id = :id ';
        $result = $this->executeRequest($sql, array(
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
        
    }
    
    
    
    
    
    /********* DESCRIPTION   *********/
    
    // Update description of the registered user in the database:
    public function updateDescription($userId, $newDescription) {
        
        
        $sql = 'UPDATE users SET description = :description WHERE id = :id ';
        
        $result = $this->executeRequest($sql, array(
                'description' => $newDescription,
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
        
    }
    
    // Delete description of the registered user in the database:
    public function deleteDescription($userId) {
        $sql = 'UPDATE users SET description = NULL WHERE id = :id ';
        $result = $this->executeRequest($sql, array(
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
        
    }
    
    
    
    
    
}





   

   
   
   
   
