<?php



require_once 'Views/ViewFrontEnd.php';


class ContactController {
    
    
    public function Contact() {
        
        $view = new ViewFrontEnd('contactView');
        $view->generate(array());
    }

}
