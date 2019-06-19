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
        $view = new ViewBackEnd('adminCertificatesView');
        $view->generate([]);
    }
    
    
    public function uploadCertImgs() {
        
        
        $uploadCertificatesImages = basename($_FILES['certificatImg']['name']);
        
        if (isset($_FILES['certificatImg'])) {
            $msg = "";
            $targetFile = "Content/img/certificats/";
            
            $target = $targetFile.$uploadCertificatesImages;
            
            if (file_exists($target))
                $msg = array("status" => 0, "msg" => "File already exists!");
            else if (move_uploaded_file($_FILES['certificatImg']['tmp_name'], $target))
                $msg = array("status" => 1, "msg" => "File Has Been Uploaded", "Content/img/certificats/" => $targetFile);
            
            /***************/
            
            
            $view = new ViewBackEnd('adminCertificatesView');
            $view->generate(['msg' => $msg]);
            
            
            /***************/
            exit(json_encode($msg));
        }
        
        
        
       
        
    }
    
    
    public function getCertificatImg() {
        
        
        if(isset($_POST["subCertImg"])){
            
            
            $getCertImg =  basename($_FILES["certificatImg"]["name"]);
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
                
                if($_FILES["certificatImg"]["type"]=="image/jpg"||$_FILES["certificatImg"]["type"]=="image/jpeg"){
                    
                    
                    
                    $certImgLocal = move_uploaded_file($_FILES["certificatImg"]["tmp_name"], $target);
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