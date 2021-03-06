<?php

namespace MathieuMT\myPortfolio\Controller;

use MathieuMT\myPortfolio\Model\AdminWorksDAO;
use MathieuMT\myPortfolio\Engine\ViewBackEnd;


class AdminWorksController {
    
    
    private $_adminWorks;
    
    
    
    public function __construct() {
        $this->_adminWorks = new AdminWorksDAO();
    }
    
 
    // Affichage de la page de gestion des réalisations:
    public function showAdminWorks() {
    
        $aboutWork = $this->_adminWorks->getWorkDescription();
        
        $view = new ViewBackEnd('adminWorksView');
        $view->generate(array('aboutWork' => $aboutWork));
       
    }
    
    /*********** PROJECT CONTROLLER *********/
        
        
    public function deleteSlides ($id) {
        
        //$workId = $this->_adminWorks->getWorkId($id);
            $slidesByWorkId = $this->_adminWorks->getSlidesByWorkId ($id);
            
            foreach ($slidesByWorkId as $slide) {
                $linkSlideImg = 'Content/img/slides_works/'.$slide['slideImg'];
                 unlink($linkSlideImg);  
            }
        
        
    }
    
        /*---------------------------
        UPLOAD MULTIPLE FILES PROJECTS
        -----------------------------*/
    public function uploadWorkImgs() {
                
        
        if (isset($_POST['delImage'])) {
            
            
            $id = intval(addslashes(htmlspecialchars($_POST['id'])));
            
            
            /*****************************************************/
            /* DELETE FILES IMAGES SLIDES BY WORK_ID  */
            $this->deleteSlides ($id); 
                
            /****************************************************/
            
            
            
            /* DELETE FILE IMAGE WORK */
            $workImg = $this->_adminWorks->getWork($id);
           
            $linkWorkImg = 'Content/img/works/'.$workImg['workImg'];
            
            unlink($linkWorkImg);
            
            /* DELETE IMAGE PROJECT FROM DATABASE */
            $this->_adminWorks->delImageBDD($id);
            
            exit('success');

        }
        
        
        if (isset($_FILES['workImg'])) {
            
            $msg = "";
            
            $targetFile =  basename($_FILES['workImg']['name'][0]);
            
            if (file_exists($targetFile))
                $msg = array("status" => 0, "msg" => "File already exists!");
            else if (move_uploaded_file($_FILES['workImg']['tmp_name'][0], "Content/img/works/".$targetFile)) {
                
                $msg = array("status" => 1, "msg" => "File Has Been Uploaded", "path" => "Content/img/works/".$targetFile);
                
               // Éviter les doublons dans le champs certificatImg de la table certificates: 
                if($this->_adminWorks->existeWorkImg($targetFile)) {
                  
                    $msg = array("status" => 0, "msg" => "File already exists!"); 
                  
                }else {
                  // S'il n'y a pas de doublons nous inserons l'image du certificat:
                  $this->_adminWorks->insertImages($targetFile);
                }
              
            }
                
            
            exit(json_encode($msg));
        }
        
    }
    

   /************* FORMULAIRE DES DETAILS DE CHAQUE PROJET ***************/ 
    
   public function sendWorkDetails($workName, $workTitle, $workDescription, $workCategory, $workLink, $workId) {
       
        
        $workName= addslashes(htmlspecialchars($workName));
        $workTitle = addslashes(htmlspecialchars($workTitle));
        $workDescription = nl2br(addslashes(htmlspecialchars($workDescription)));
        $workCategory = addslashes(htmlspecialchars($workCategory));
        $workLink = addslashes(htmlspecialchars($workLink));
        $workId = intval(addslashes($workId));
       
       
       if (isset($workName) && isset($workTitle) && isset($workDescription) && isset($workCategory) && isset($workLink) && !empty($workName) && !empty($workTitle) && !empty($workDescription) && !empty($workCategory) && !empty($workLink)) {

                $sendWorkDetails = $this->_adminWorks->sendWorkDetails($workName, $workTitle, $workDescription, $workCategory, $workLink, $workId);
        }
       
        /********** MESSAGES D'ALERTES***********/
        
        if ($sendWorkDetails) {
            $_SESSION['sendWorkDetails'] = 'Les informations du projet ont bien été enregistrées dans la base de données';
            
        } else {
            $_SESSION['error'] = 'Les informations du projet n\'ont pas été enregistrées dans la base de données';
            
        }
       
       
        /****************************************/
       

        $work = $this->_adminWorks->getWork($workId);
       
        header('Location: https://mmtmc.alwaysdata.net/index.php?action=adminWorks');
       
        $view = new ViewBackEnd('adminWorksView');
        $view->generate(array('work' => $work,'workName' => $workName, 'workTitle' => $workTitle, 'workDescription' => $workDescription, 'workCategory' => $workCategory, 'workLink' == $workLink));
            
       exit();
       
   }
    
    
}