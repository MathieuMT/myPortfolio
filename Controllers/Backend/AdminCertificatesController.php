<?php
require_once 'Models/Frontend/AdminCertificatesManager.php';

require_once 'Views/ViewBackEnd.php';


class AdminCertificatesController {
    
   
    private $_adminCertificates;
    
    
    
    public function __construct() {
        $this->_adminCertificates = new AdminCertificatesManager();
    }
    
 
    // Affichage de la page de gestion des certificats:
    public function showAdminCertificates() {
        
        $aboutCertificate = $this->_adminCertificates->getCertificateDescription();
        
        $view = new ViewBackEnd('adminCertificatesView');
        $view->generate(array('aboutCertificate' => $aboutCertificate));
       
    }
    
    
        /*-------------------
        UPLOAD MULTIPLE FILES
        ---------------------*/
    
    public function uploadCertImgs() {
                
        
        if (isset($_POST['delImage'])) {
            
            
            $id = htmlspecialchars($_POST['id']);
            
            
            /* DELETE FILE IMAGE CERTIFICATE */
            $certImg = $this->_adminCertificates->getCertificate($id);
           
            $linkCertImg = 'Content/img/certificats/'.$certImg['certificatImg'];
            
            unlink($linkCertImg);
            
            
            /* DELETE IMAGE CERTIFICATE FROM DATABASE */
            $this->_adminCertificates->delImageBDD($id);
            
            exit('success');

        }
        
        
        if (isset($_FILES['certificatImg'])) {
            
            $msg = "";
            
            $targetFile =  basename($_FILES['certificatImg']['name'][0]);
            
            if (file_exists($targetFile))
                $msg = array("status" => 0, "msg" => "File already exists!");
            else if (move_uploaded_file($_FILES['certificatImg']['tmp_name'][0], "Content/img/certificats/".$targetFile)) {
                
                $msg = array("status" => 1, "msg" => "File Has Been Uploaded", "path" => "Content/img/certificats/".$targetFile);
                
               // Éviter les doublons dans le champs certificatImg de la table certificates: 
                if($this->_adminCertificates->existeCertificatImg($targetFile)) {
                  
                    $msg = array("status" => 0, "msg" => "File already exists!"); 
                  
                }else {
                  // S'il n'y a pas de doublons nous inserons l'image du certificat:
                  $this->_adminCertificates->insertImages($targetFile);
                }
              
            }
                
            
            exit(json_encode($msg));
        }
        
    }
    
    
    
    
   /************* FORMULAIRE DES DETAILS DE CHAQUE CERTIFICAT ***************/ 
    
   public function sendCertificateDetails($certificateName, $certificateTitle, $certificateDescription, $certificateId) {
       
        
        $certificateName= htmlspecialchars($certificateName);
        $certificateTitle = htmlspecialchars($certificateTitle);
        $certificateDescription = htmlspecialchars($certificateDescription);
        $certificateId = intval($certificateId);
       
       
       if (isset($certificateName) && isset($certificateTitle) && isset($certificateDescription) && !empty($certificateName) && !empty($certificateTitle) && !empty($certificateDescription) ) {

                $sendCertificateDetails = $this->_adminCertificates->sendCertificateDetails($certificateName, $certificateTitle, $certificateDescription, $certificateId);
        }
       
        /********** MESSAGES D'ALERTES***********/
        
        if ($sendCertificateDetails) {
            $_SESSION['sendCertificateDetails'] = 'Les informations du certificat ont bien été enregistrées dans la base de données';
            
        } else {
            $_SESSION['error'] = 'Les informations du certificat n\'ont pas été enregistrées dans la base de données';
            
        }
       
       
        /****************************************/
       
       
       
       
        $certificate = $this->_adminCertificates->getCertificate($certificateId);
       
        header('Location: index.php?action=adminCertificates');
       
        $view = new ViewBackEnd('adminCertificatesView');
        $view->generate(array('certificate' => $certificate,'certificateName' => $certificateName, 'certificateTitle' => $certificateTitle, 'certificateDescription' => $certificateDescription));
            
       exit();
       
   }
    
    
    
  
    
    /*************************************************************************/
    

        /*-------------
        UPLOAD ONE FILE
        --------------*/
    /*
    public function getCertificatImg() {
        
        
        if(isset($_POST["subCertImg"])){
            
            
            $getCertImg =  basename($_FILES["certificatImg"][0]["name"]);
            if($getCertImg==""){
                $this->_error1['getCertificatImg'] = "Please choose";
            }
            else
            {
                $target="Content/img/certificats/";
                $ran=time();
                $target=$target.$ran.$getCertImg;
                $certificatImgName=$ran.$getCertImg;
                
                //var_dump($certificatImgName);
               //echo "<img src='Content/img/certificats/$certificatImgName'/>";
                
                if($_FILES["certificatImg"][0]["type"]=="image/jpg"||$_FILES["certificatImg"][0]["type"]=="image/jpeg"){
                    
                    
                    
                    $certImgLocal = move_uploaded_file($_FILES["certificatImg"][0]["tmp_name"], $target);
                    if($certImgLocal){
                        include_once 'Models/Frontend/AdminCertificatesManager.php';
                        $this->_adminCertificates->uploadCertificatImg($certificatImgName);
                        $this->_success1['getCertificatImg'] = 'Votre image est bien téléchargée !';
                    }
                    else
                    {
                        $this->_error2['getCertificatImg'] = 'File is not uploaded';
                    }
                }
                else
                {
                    $this->_error3['getCertificatImg'] = 'Please choose Image';
                }
            }
        }
        
        
       
       
        $view = new ViewBackEnd('adminCertificatesView');
        $view->generate(['_success1' => $this->_success1, '_error1' => $this->_error1, '_error2' => $this->_error2, '_error3' => $this->_error3]);
        
        
        exit();
    }
    */
    
    /*************************************************************************/
    
   
    
    
}