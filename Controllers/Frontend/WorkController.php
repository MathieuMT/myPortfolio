<?php


require_once 'Models/Frontend/Work.php';
require_once 'Models/Frontend/Slide.php';
require_once 'Views/ViewFrontEnd.php';


class WorkController {
    private $_work;
    private $_slide;
    
    
    public function __construct(){
        $this->_work = new WorkManager();
        $this->_slide = new SlideManager();
        
        
    }
    
    
    
    //Show list of all projects
    public function aboutWorks() {
        $aboutWork = $this->_work->getWorkDescription();
        $aboutSlide = $this->_slide->getSlideDescription();
        $view = new ViewFrontEnd('worksView');
        $view->generate(array('aboutWork' => $aboutWork, 'aboutSlide' => $aboutSlide));
    }
    
}
