<?php

namespace MathieuMT\myPortfolio\Controller;

use MathieuMT\myPortfolio\Model\AdminWorkDAO;
use MathieuMT\myPortfolio\Engine\ViewBackEnd;


class AdminWorkController {
    
    
    private $_adminWork;

    public function __construct() {
        $this->_adminWork = new AdminWorkDAO();
    }
    
 
    // Affichage de la page de gestion des réalisations:
    public function showAdminWork($workId) {
        
        //$aboutWork = $this->_adminWork->getWorkDescription($workId);
        $slides = $this->_adminWork->getS($workId);
        $aboutSlide = $this->_adminWork->getSlideDescription();
        

        $work = $this->_adminWork->getWork($workId);
        //$slide = $this->_adminWork->getSlide($workId);
        
        $view = new ViewBackEnd('adminWorkView');
        $view->generate(array('work' => $work,'slides' => $slides, 'aboutSlide' => $aboutSlide));
       
    }
    
     /*********** SLIDE CONTROLLER *********/
    
  
    
        /*---------------------------
        UPLOAD MULTIPLE FILES SLIDES
        -----------------------------*/
    
    public function uploadSlideImgs() {
                
        
        if (isset($_POST['delImageSlide'])) {
            
            
            $id = htmlspecialchars($_POST['id']);
            
            
            /* DELETE FILE IMAGE CERTIFICATE */
            $slideImg = $this->_adminWork->getSlide($id);
           
            $linkSlideImg = 'Content/img/slides_works/'.$slideImg['slideImg'];
            
            unlink($linkSlideImg);
            
            
            /* DELETE IMAGE CERTIFICATE FROM DATABASE */
            $this->_adminWork->delImageSlideBDD($id);
            
            exit('success');

        }
        
        
        if (isset($_FILES['slideImg'])) {
            
            $msg = "";
            
            $targetFile =  basename($_FILES['slideImg']['name'][0]);
            
            if (file_exists($targetFile))
                $msg = array("status" => 0, "msg" => "File already exists!");
            else if (move_uploaded_file($_FILES['slideImg']['tmp_name'][0], "Content/img/slides_works/".$targetFile)) {
                
                $msg = array("status" => 1, "msg" => "File Has Been Uploaded", "path" => "Content/img/slides_works/".$targetFile);
                
               // Éviter les doublons dans le champs certificatImg de la table certificates: 
                if($this->_adminWork->existeSlideImg($targetFile)) {
                  
                    $msg = array("status" => 0, "msg" => "File already exists!"); 
                  
                }else {
                    $work_id = intval($_POST['work_id']);
                        if ($work_id > 0) {
                            // S'il n'y a pas de doublons nous inserons l'image du diapositif:
                            $this->_adminWork->insertImagesSlides($targetFile, $work_id);
                        }
                }
              
            }
                
            
            exit(json_encode($msg));
        }
        
    }
    
    
    /************* FORMULAIRE DES DETAILS DE CHAQUE DIAPOSITIF ***************/ 
    
    
    public function sendSlideDetails($slideName, $slideId, $work_id) {
        
        
        $work_id = htmlspecialchars($work_id);
        $slideName = htmlspecialchars($slideName);
        $slideId = intval($slideId);
       
       
       if (isset($slideName) && !empty($slideName)) {

                $sendSlideDetails = $this->_adminWork->sendSlideDetails($slideName, $slideId, $work_id);
        }
       
        /********** MESSAGES D'ALERTES***********/
        
        if ($sendSlideDetails) {
            $_SESSION['sendSlideDetails'] = 'Les informations du diapositif ont bien été enregistrées dans la base de données';
            
        } else {
            $_SESSION['error'] = 'Les informations du diapositif n\'ont pas été enregistrées dans la base de données';
            
        }
       
       
        /****************************************/
       
       
       
       
        $slide = $this->_adminWork->getSlide($slideId);
       
        header('Location: https://mmtmc.alwaysdata.net/index.php?action=adminWork&id='.$work_id);
       
        $view = new ViewBackEnd('adminWorkView');
        $view->generate(array('slide' => $slide,'slideName' => $slideName, 'work_id' => $work_id));
            
       exit();
    
    }
    
}