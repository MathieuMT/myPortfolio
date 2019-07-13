<?php
require_once 'Models/Frontend/AdminWorksManager.php';
require_once 'Views/ViewBackEnd.php';


class AdminWorksController {
    
    
    private $_adminWorks;
    
    
    
    public function __construct() {
        $this->_adminWorks = new AdminWorksManager();
    }
    
 
    // Affichage de la page de gestion des réalisations:
    public function showAdminWorks() {
    
        $aboutWork = $this->_adminWorks->getWorkDescription();
        
        $view = new ViewBackEnd('adminWorksView');
        $view->generate(array('aboutWork' => $aboutWork));
       
    }
    
    /*********** PROJECT CONTROLLER *********/
        
        /*---------------------------
        UPLOAD MULTIPLE FILES PROJECTS
        -----------------------------*/
    
    public function uploadWorkImgs() {
                
        
        if (isset($_POST['delImage'])) {
            
            
            $id = htmlspecialchars($_POST['id']);
            
            
            
            /*****************************************************/
            
            /* DELETE FILE IMAGES SLIDES */
            $slideImg = $this->_adminWorks->getSlide($id);
            
            $linkSlideImg = 'Content/img/slides_works/'.$slideImg['slideImg'];
               
            unlink($linkSlideImg);  
                
            /****************************************************/
            
            
            
            /* DELETE FILE IMAGE WORK */
            $workImg = $this->_adminWorks->getWork($id);
           
            $linkWorkImg = 'Content/img/works/'.$workImg['workImg'];
            
            unlink($linkWorkImg);
            
            /* DELETE IMAGE CERTIFICATE FROM DATABASE */
            //$this->_adminWorks->delImageSlideBDD($id);
            
            /* DELETE IMAGE CERTIFICATE FROM DATABASE */
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
       
        
        $workName= htmlspecialchars($workName);
        $workTitle = htmlspecialchars($workTitle);
        $workDescription = htmlspecialchars($workDescription);
        $workCategory = htmlspecialchars($workCategory);
        $workLink = htmlspecialchars($workLink);
        $workId = intval($workId);
       
       
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
       
        header('Location: index.php?action=adminWorks');
       
        $view = new ViewBackEnd('adminWorksView');
        $view->generate(array('work' => $work,'workName' => $workName, 'workTitle' => $workTitle, 'workDescription' => $workDescription, 'workCategory' => $workCategory, 'workLink' == $workLink));
            
       exit();
       
   }
    
    
}