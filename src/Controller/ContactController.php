<?php

namespace MathieuMT\myPortfolio\Controller;

use MathieuMT\myPortfolio\Model\ContactDAO;
use MathieuMT\myPortfolio\Engine\ViewFrontEnd;

class ContactController {
    

    public function __construct() {
        $this->manager = new ContactDAO();
    }
    
    public function Contact() {
        
        $view = new ViewFrontEnd('contactView');
        $view->generate(array());
    }
    
    public function newContactInDB($contactFirstName, $contactLastName, $contactEmail, $contactObject, $contactMsg) {
        
        
        /* Avoid injecting user code into the fields of the form (against the XSS flaw): */
        $contactFirstName = htmlspecialchars($contactFirstName);
        $contactLastName = htmlspecialchars($contactLastName);
        $contactEmail = htmlspecialchars($contactEmail);
        $contactObject = htmlspecialchars($contactObject);
        $contactMsg = htmlspecialchars($contactMsg);
        
        /* SANITIZE ALL POST VARS */
        $contactFirstNameClean = filter_var($contactFirstName, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        $contactLastNameClean = filter_var($contactLastName, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        $contactEmailClean = filter_var($contactEmail, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
        $contactObjectClean = filter_var($contactObject, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        $contactMsgClean = filter_var($contactMsg, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        
        $this->manager->newContact($contactFirstNameClean, $contactLastNameClean, $contactEmailClean, $contactObjectClean, $contactMsgClean);
        
        $this->toBeContactedByEmail($contactFirstNameClean, $contactLastNameClean, $contactEmailClean, $contactObjectClean, $contactMsgClean);

        exit();
        
    }

    /* Email : the form to myself: */
    
    private function toBeContactedByEmail($contactFirstNameClean, $contactLastNameClean, $contactEmailClean, $contactObjectClean, $contactMsgClean) {
        

        /* Avoid injecting user code into the fields of the form (against the XSS flaw): */
        /*
        $contactFirstName = htmlspecialchars($contactFirstName);
        $contactLastName = htmlspecialchars($contactLastName);
        $contactEmail = htmlspecialchars($contactEmail);
        $contactObject = htmlspecialchars($contactObject);
        $contactMsg = htmlspecialchars($contactMsg);
        */
        
        /* SANITIZE ALL POST VARS */
        /*
        $contactFirstNameClean = filter_var($contactFirstName, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        $contactLastNameClean = filter_var($contactLastName, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        $contactEmailClean = filter_var($contactEmail, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);
        $contactObjectClean = filter_var($contactObject, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        $contactMsgClean = filter_var($contactMsg, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        */
        
        $to = '2mmtmc@gmail.com';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        //$headers .= 'From:<'.$contactEmailClean.'>' . "\r\n";
        $headers .= 'From:<noreply@mmtmc.alwaysdata.net>' . "\r\n";
        $message = '<table width="100%" border="1" cellspacing="1" cellpadding="2">
        <tr><td colspan="2">Quelqu\'un vous a contacté sur votre portfolio MathieuMT</td></tr>
        <tr><td>Prénom</td><td>'.$contactFirstNameClean.'</td></tr>
        <tr><td>Nom de famille</td><td>'.$contactLastNameClean.'</td></tr>
        <tr><td>email</td><td>'.$contactEmailClean.'</td></tr>
        <tr><td>Objet</td><td>'.$contactObjectClean.'</td></tr>
        <tr><td>Message</td><td>'.$contactMsgClean.'</td></tr>
        </table>';
        
        mail($to, $contactObjectClean, $message, $headers);
       
        /* Send message back to AJAX */
        echo '<div class="alert alert-success mt-2">Merci de me contacter, je vous répondrai au plus vite dans un jour ouvrable.</div>';
        
    }
        
}
