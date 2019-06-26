<?php

require_once 'Models/Model.php';

class AdminCertificatesManager extends Model{
    
    
   public function uploadCertificatImg($certificatImgName){
        $sql="INSERT INTO certificates (certificatImg) VALUES ('$certificatImgName')";
        $result=$this->executeRequest($sql);
        if($result){
            echo "File is uploaded";
        }
        else
        {
            echo "File is not uploaded";
        }
    }
    
    
    
    /**************************/
    /**************************/
    /**************************/
    /**************************/
    /**************************/
    
    
    
    
    /*
    
    // Delete a image of certificate in the database:
    public function delImage($id) {
        
        $sql = 'DELETE FROM certificates WHERE id = :id';
        
        $response = $this->executeRequest($sql, array(
                                'id' => $data['id']
                                 ));
        
        while ($data = $response->fetch_assoc()) {
            $response[] = array("certificatImg" => $data['certificatImg'], "id" => $data['id']);
        }
        
        return $response;
    } 
    
    */
    
    /*
    public function delImageCertFile($id) {
       
        $sql = "DELETE FROM certificates WHERE id ='$id'";
        
        $response = $this->executeRequest($sql);
        while ($imgCertData=$response->fetch(PDO::FETCH_ASSOC)) {
            $delImageCertFile = $imgCertData ['certificatImg'];
            unlink($delImageCertFile);
        }
        
    } 
    */
    
    
  /////// OK //////////////  
    
   // Delete a image of certificate in the database:
    public function delImageBDD($id) {
       
        $sql = 'DELETE FROM certificates WHERE id = :id';
        
        $response = $this->executeRequest($sql, array(
                                'id' => $id
                                 ));

        return $response;
      
        /*
        $sql = 'UPDATE certificates SET certificatImg = NULL WHERE id = :id ';
        
        $result = $this->executeRequest($sql, array(
                "certificatImg" => $data['certificatImg'], "id" => $data['id']
                                    ));
        return $result;
        */
    } 
    
    
    
    
    
    /*
    // Delete avatar of the registered user in the database:
    public function deleteAvatar($profileId) {
        $sql = 'UPDATE members SET avatar = NULL WHERE id = :id ';
        $result = $this->executeQuery($sql, array(
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
    } 
    */
    
    
     public function getCertificateDescription() { // Obtenir la liste des données descriptives pour chaque "User" sous forme de tableau d'objets.
        
        $certificates = [];
        $sql = "SELECT * FROM certificates";
        
        $aboutCertificate = $this->executeRequest($sql); // tableau des données concernant le travail
        foreach ($aboutCertificate as $oneCertificate) { // On parcours les tableaux des données pour chaque utilisateur
            $certificate = new Certificate($oneCertificate); // On instancie l'utisateur (entité) et son tableau de données en objet (pour 1 travail)
            $certificates[] = $certificate; /* S'il y a plusieurs travaux ou s'il y a un seul travail , on les regroupe en objets dans un tableau de plusieurs travaux */
        }
        
        //var_dump($aboutWork);
        //var_dump($works);
        return $certificates; // On renvoie un tableau de plusieurs objets 
    }
    
 

    
    
    
    /** À RETRAVAILLER !!! **/
    
    // get images of certificates in the database:
   
    public function getImages($start) {
        
        
        $sql = 'SELECT * FROM certificates ORDER BY id DESC LIMIT'.$start.', 8';
        
         $response = $this->executeRequest($sql, array(
                                "certificatImg" => $data['certificatImg'], "id" => $data['id']
                                 ));
        
        
        while ($data = $response->fetch_assoc())
            $response[] = array("certificatImg" => $data['certificatImg'], "id" => $data['id']);
        
        return $response;
        
    }
    
  
    
    /*
     // Returns the list of blog posts by decreasing creation date:
    public function getPosts() {
        
        $sql = 'SELECT id, title, content, author, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC';
    
        $posts = $this->executeQuery($sql);
        return $posts;
   }
    */    
        
        
    /*
    $req = $this->executeQuery($sql, array('nickname' => $nickname));
    $result = $req->fetch();
    
    $response = $this->executeRequest($sql, array(
                                "certificatImg" => $data['certificatImg'], "id" => $data['id']
                                 ));
        
        return $result;
    
    */
    
    
    
    /**************************************
    
                OK !!!
        
    ***************************************/
    
    // Add new images in the database:
    public function insertImages($targetFile) {
        /*
        $sql = 'INSERT INTO certificates (certificatImg, uploadedOn) VALUES (:certificatImg, NOW())';
        */
        
        /*
        $sql = "INSERT INTO certificates (certificatImg, uploadedOn) VALUES ('$targetFile', NOW())";
        */
        
        /*
        $sql = 'UPDATE certificates SET certificatImg = :certificatImg WHERE id = :id ';
        */
        /*
        $result = $this->executeRequest($sql, array(
                            
                            ':certificatImg' => $targetFile
                            
                            ));
        
        return $result;
        */
        
        
        
        
        $sql="INSERT INTO certificates (certificatImg) VALUES ('$targetFile')";
        
        
        
        /*
        $sql = "INSERT INTO certificates (certificatImg) 
SELECT :certificatImg FROM certificates
WHERE NOT EXISTS (SELECT 1 FROM certificates   WHERE certificatImg= $targetFile)";
        */
        /*
        WHERE nickname = :nickname
        */
        
        $result=$this->executeRequest($sql);
        
        
        
    }
    
    // Si le champ certificatImg existe déjà dans la table certificates:
    function existeCertificatImg($targetFile)
    {   
   
     
        $sql = "SELECT *
                FROM certificates
                WHERE certificatImg = '$targetFile'";

        $res = $this->executeRequest($sql);
        $row = $res->fetch();

        return !empty($row);
    }
    
    /*
    public function certificatImgDuplicate ($targetFile) {
        
        
         // Good certificatImg in db:
        $sql = 'SELECT * FROM certificates WHERE certificatImg = :certificatImg';

        $result = $this->executeQuery($sql, array('certificatImg'=>$targetFile));

        return $result->fetch();
        
        
    }
    */
    
    
   
    
    /*
    public function insertImagesCertificates($targetFile) {
        
        
        
        $sql = "IF NOT EXISTS (SELECT * FROM certificates WHERE certificatImg = '.$targetFile.') 
BEGIN 
INSERT IGNORE INTO certificates (certificatImg) VALUES ('$targetFile')";
        
        
        $result=$this->executeRequest($sql);
    }
    */
    
    
    
    /*  
    public function insertImagesTest($targetFile) {
        
        if ($targetFile == $sql) {
            
            $sql = "SELECT * FROM certificates WHERE certificatImg='$targetFile'";

            $result=$this->executeRequest($sql);
            
            echo ("Ce(s) certificat(s) existe(nt) déjà dans la base de données");
            
            exit;
            
        } else {
            $sql="INSERT INTO certificates (certificatImg) VALUES ('$targetFile')";
            $result=$this->executeRequest($sql);
        }
        
    }
 
    */
    
    
     /******************************************/
    
    
     /**************************************
    
                 À REFAIRE !!!
        
    ***************************************/
    
    // Number of rows in the gallery:
    public function numRows() {
        /*
        $sql = 'SELECT COUNT(id) FROM certificates';
        
        $numRows = $this->executeRequest($sql);
        
        return $numRows;
        */
        $sql = 'SELECT count(*) AS numRows FROM certificates';
        
        $result = $this->executeRequest($sql);
        
        $data = $result->fetch();
        
        $numRows = $data['numRows'];
        //$numRows = $result->rowCount();
        
        return $numRows;
        
        
    }
     
    
    
    /*
    $res = $bdd->query('select count(*) as nb from maTable');
$data = $res->fetch();
$nb = $data['nb'];
    */
     /****************************************/
    
    
    
    
    
     /*
    
    
    // Add a new avatar for the profil of the registered user:
    public function addNewAvatar($avatar, $profileId) {
        
        // Create an "avatar" entry in the database:
        $sql = 'UPDATE members SET avatar = :avatar WHERE id = :id ';
        $result = $this->executeQuery($sql, array(
                'avatar' => $avatar,
                'id' => $_SESSION['id']
                                    ));
        
        return $result;
 
    }
    
    
    */
    
    
    
    
    
    /*
    
     public function uploadCertificatImg($certificatImgName){
        $sql="INSERT INTO certificates (certificatImg) VALUES ('$certificatImgName')";
        $result=$this->executeRequest($sql);
        if($result){
            echo "File is uploaded";
        }
        else
        {
            echo "File is not uploaded";
        }
    }
    
    
    
    
    */
    
    
    
    
    
    
   /* 
    public function getCertImg($certificateId) {
        
        $sql = 'SELECT * FROM certificates WHERE id = ?';
        
        $_certImg = $this->executeQuery($sql, array($certificateId));
        
        if ($_certImg->rowCount() > 0)
            return $_certImg->fetch(); // Access to the first result line.
        else 
            throw new Exception("Aucun certificat ne correspond à l'identifiant '$certificateId'");
        
    }
    */
    
    
    
    
    
    
    /*
    public function listCertImg() {
        
        $sql = "SELECT * FROM certificates";
        $result = $this->executeRequest($sql);
        
        if($result->rowCount() > 0) {
            
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                
                $_certImgs = 'Content/img/certificats/'.$row["certificatImg"];
                
                
            }
            
        }
        
    }
   
    */
    
    
    
    
    
    
    /*
    public function listCertImg() {
        
        $sql = "SELECT * FROM certificates";
        $result = $this->executeRequest($sql);
        
        if($result->rowCount() > 0) {
            
            while($row = $result->fetch()) {
                
                $imageURL = 'Content/img/certificats/'.$row["certificatImg"];
                
            }
            
        }
        
    }
    */
    
    /*
    public function listCertImg() {
        
        $sql = "SELECT * FROM certificates";
        $result = $this->executeRequest($sql);
        $count = $result->rowCount();
        if($count < 1) {
            
            
            
        }else {
            while ($row = $result->fetch()) {
                $rows[] = $row;
            }
            
            return $rows;
        }
        
        
    }
    */
    
    /*
     public function listGallery(){
        $select="select * from gallery";
        $result=$this->query($select);
        $count=$result->num_rows;
        if($count< 1){
            
        }
        else
        {
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $rows[]=$row;
            }
            return $rows;
        }
    }
    */
    
    /*
    public function showCount() {
        $sql = "SELECT * FROM certificates";
        $result = $this->executeRequest($sql);
        $count = $result->rowCount();
        
        if ($count < 1) {
            return 0;
        }else {
            return $count;
        }
        
    }
    
    */
    
    /*
    public function listCertificatImg(){
        $sql="select * from certificates";
        $result=$this->executeRequest($sql);
        $count=$result->num_rows;
        if($count< 1){
            
        }
        else
        {
            while ($row = $result->fetch_array()) {
                $rows[]=$row;
            }
            return $rows;
        }
    }
    
    */
    
    
    
    
    
    
    
    
    /*
    // Returns information on a post:
    public function getCertificateImg($certificateImgId) {
        $sql = 'SELECT * FROM certificates WHERE id = ?';
        $certificateImg = $this->executeRequest($sql, array($certificateImgId));
        if ($certificateImg->rowCount() > 0)
            return $certificateImg->fetch(); // Access to the first result line.
        else 
            throw new Exception("Aucun certificat ne correspond à l'identifiant '$certificateImgId'");
    }
    
    */
    
   
    
    
  
}




