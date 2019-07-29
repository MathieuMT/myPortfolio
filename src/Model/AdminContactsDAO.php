<?php

namespace MathieuMT\myPortfolio\Model;

use MathieuMT\myPortfolio\Model\Entities\Contact;
use MathieuMT\myPortfolio\Model\Model;


class AdminContactsDAO extends Model{
    
    
    
     public function getContactDescription() { // Obtenir la liste des données descriptives pour chaque "contact" sous forme de tableau d'objets.
        
        $contacts = [];
        $sql = "SELECT * FROM contact ORDER BY comment_date DESC";
        
        $aboutContact = $this->executeRequest($sql); // tableau des données concernant le contact
        foreach ($aboutContact as $oneContact) { // On parcours les tableaux des données pour chaque contact
            $contact = new Contact($oneContact); // On instancie le contact (entité) et son tableau de données en objet (pour 1 contact)
            $contacts[] = $contact; /* S'il y a plusieurs travaux ou s'il y a un seul travail , on les regroupe en objets dans un tableau de plusieurs travaux */
        }
        
        return $contacts; // On renvoie un tableau de plusieurs objets 
    }
    

    


    
    
    
    
    // Delete a post in the database:
    public function deleteContact($contactId) {
        
        $sql = 'DELETE FROM contact WHERE id = :id';
        
        $result = $this->executeRequest($sql, array(
                                'id' => $contactId
                                 ));
        
        return $result;
    }
    
    
    
    
    
}




