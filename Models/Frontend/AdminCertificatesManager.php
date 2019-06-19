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




