<?php

namespace MathieuMT\myPortfolio\Controller;


use MathieuMT\myPortfolio\Model\WorkDAO;
use MathieuMT\myPortfolio\Model\SlideDAO;
use MathieuMT\myPortfolio\Engine\ViewFrontEnd;





class WorkController {
    private $_work;
    private $_slide;
    
    
    public function __construct(){
        $this->_work = new WorkDAO();
        $this->_slide = new SlideDAO();
        
        
    }
    
    
    
    //Show list of all projects
    public function aboutWorks() {
        $aboutWork = $this->_work->getWorkDescription();
        $aboutSlide = $this->_slide->getSlideDescription();
        $view = new ViewFrontEnd('worksView');
        $view->generate(array('aboutWork' => $aboutWork, 'aboutSlide' => $aboutSlide));
    }
    
}
