<?php


require_once 'Models/Frontend/Work.php';
require_once 'Views/ViewFrontEnd.php';


class WorkController {
    private $_work;
    
    
    
    public function __construct(){
        $this->_work = new WorkManager();
        
        
    }
    
    
    
     //Show list of all blog posts
    public function aboutWorks() {
        $aboutWork = $this->_work->getWorkDescription();
        $view = new ViewFrontEnd('worksView');
        $view->generate(array('aboutWork' => $aboutWork));
    }

}
