<?php


namespace MathieuMT\myPortfolio\Model;

use MathieuMT\myPortfolio\Model\Model;

class ContactDAO extends Model {
 
   
    //  Add a new contact in database:
    public function newContact($contactFirstNameClean, $contactLastNameClean, $contactEmailClean, $contactObjectClean, $contactMsgClean) {
        
        $sql = 'INSERT INTO contact (firstname, lastname, email, subject, comments, comment_date) VALUES(:firstname, :lastname, :email, :subject, :comments, NOW())';
       
        
        $newContact = $this->executeRequest($sql, array('firstname' => $contactFirstNameClean, 'lastname'=> $contactLastNameClean, 'email' => $contactEmailClean, 'subject' => $contactObjectClean, 'comments' => $contactMsgClean));
        
        if ($newContact) {
            return true;
        } else {
            return false;
        }
    }
   

}

