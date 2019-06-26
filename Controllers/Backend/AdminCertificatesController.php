<?php
require_once 'Models/Frontend/AdminCertificatesManager.php';

require_once 'Views/ViewBackEnd.php';


class AdminCertificatesController {
    
    private $_success1;
    private $_error1;
    private $_error2;
    private $_error3;
    
   
    
    private $_adminCertificates;
    
    
    
    public function __construct() {
        $this->_adminCertificates = new AdminCertificatesManager();
    }
    
    
    
    
    // Affichage de la page de gestion des certificats:
    public function showAdminCertificates() {
        
        $aboutCertificate = $this->_adminCertificates->getCertificateDescription();
        $view = new ViewBackEnd('adminCertificatesView');
        $view->generate(array('aboutCertificate' => $aboutCertificate));
        
        /*
        $view = new ViewBackEnd('adminCertificatesView');
        $view->generate([]);
        */
    }
    
    
        /*-------------------
        UPLOAD MULTIPLE FILES
        ---------------------*/
    
    public function uploadCertImgs() {
        
        
        if (isset($_POST['delImage'])) {
            
            $id = htmlspecialchars($_POST['id']);
            
            //$this->_adminCertificates->delImageCertFile($id);
            
            
            /*************************/
            /*
            $file = $_POST['delImage'];
            
            $linkFile = 'Content/img/certificats/$file';
            $response = unlink($linkFile);
            */
            //$file = $_POST['delImage'];
            //unlink('Content/img/certificats/' . $file . '.' . jpg);
            /***************************/
            
            
            $this->_adminCertificates->delImageBDD($id);
            
            //exit(json_encode(array("success" => $response)));
            
            exit('success');

        }
        
        if (isset($_POST['getImages'])) {
            
            $start = htmlspecialchars($_POST['start']);
            
            $this->_adminCertificates->getImages($start);
            
            exit(json_encode(array("images" => $response)));
            
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
        
        /* à refaire:
        
        $numRows = $this->_adminCertificates->numRows();
        */
        
         
        
        $this->_adminCertificates->numRows();
        
    }
    
/*
    //Show list of all details of "aboutCertificates"
    public function aboutCertificates() {
        $aboutCertificate = $this->_adminCertificates->getCertificateDescription();
        $view = new ViewBackEnd('adminCertificatesView');
        $view->generate(array('aboutCertificate' => $aboutCertificate));
    }
    
*/   
    

    
    
   
    
    
    
    
    
    
        /*-------------
        UPLOAD ONE FILE
        --------------*/
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
     
    
    /*
    // Show list of images of certificates:
    public function listCertImg() {
        $this->_certImgs =  $this->_adminCertificates->listCertImg();
        $view = new ViewBackEnd('adminCertificatesView');
        $view->generate(array('_certImgs' => $this->_certImgs));
    }
    */
    
    
    /*
    // Show list of all blog posts
    public function listPosts() {
        $posts = $this->post->getExtractPostsWithNumberOfComments();
        $view = new View('listPostsView');
        $view->generate(array('posts' => $posts));
    }
    
    */
    
/*   
    
 if(isset($_FILES['certificatImg']['name']))

{$_FILES['certificatImg']['name']=("".$certificateImg['id']."jpg");}

*/  
    
    
    
    
    /*
    // Show post detail:
    public function certificateImg($certificateImgId) {
        $certificateImg = $this->_adminCertificates->getCertificateImg($certificateImgId);
        
        $view = new ViewBackEnd('adminCertificatesView');
        $view->generate(array('certificateImg' => $certificateImg));
        
        exit();
    }   
    */
    
 
    
    
    
    
    
    
    
    
    
    
    
}