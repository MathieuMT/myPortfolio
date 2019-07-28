<?php


namespace MathieuMT\myPortfolio\Model;

use MathieuMT\myPortfolio\Model\User;
use MathieuMT\myPortfolio\Model\Model;



class UserDAO extends Model{
    
    
    public function getUserDescription() { // Obtenir la liste des données descriptives pour chaque "User" sous forme de tableau d'objets.
        
        $users = [];
        $sql = "SELECT * FROM users";
        
        $aboutUser = $this->executeRequest($sql); // tableau des données concernant l'utilisateur
        foreach ($aboutUser as $oneUser) { // On parcours les tableaux des données pour chaque utilisateur
            $user = new User($oneUser); // On instancie l'utisateur (entité) et son tableau de données en objet (pour 1 utilisteur)
            $users[] = $user; /* S'il y a plusieurs utilisateurs ou s'il y a un seul utilisateur , on les regroupe en objets dans un tableau de plusieurs utilisateurs */
        }
        
        //var_dump($aboutUser);
        //var_dump($users);
        return $users; // On renvoie un tableau de plusieurs objets 
    }
    
    /*
    // Returns informations on an user:
    public function getUser($userId) {
        
        $sql ='SELECT * FROM users WHERE id = ?';
        
        $user = $this->executeRequest($sql);
        
        if ($user->rowCount() > 0)
            return new User($user->fetch()); // Access to the first result line.
        else
            throw new Exception("Aucun utilisateur ne correspond à l'identifiant '$userId'");
    }
    */
    
    
}



