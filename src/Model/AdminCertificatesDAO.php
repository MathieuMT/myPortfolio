<?php


namespace MathieuMT\myPortfolio\Model;

use MathieuMT\myPortfolio\Model\Model;

use MathieuMT\myPortfolio\Model\Entities\Certificate;

class AdminCertificatesDAO extends Model{
    
  

    
   // Delete a image of certificate in the database:
    public function delImageBDD($id) {
       
        $sql = 'DELETE FROM certificates WHERE id = :id';
        
        $response = $this->executeRequest($sql, array(
                                'id' => $id
                                 ));

        return $response;
      
    } 
    
    
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
    

    // Add new images in the database:
    public function insertImages($targetFile) {
        
        $sql="INSERT INTO certificates (certificatImg) VALUES ('$targetFile')";
        
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
    


    /************* FORMULAIRE DES INFORMATIONS DE CHAQUE CERTIFICAT ***************/
    
    
    // Update certificate in the database:
    public function sendCertificateDetails($certificateName, $certificateTitle, $certificateDescription, $certificateId) {
        
        $sql = 'UPDATE certificates SET name = :name,  certificatTitle = :certificatTitle, certificatDescription = :certificatDescription WHERE id = :id';
        
        $result = $this->executeRequest($sql, array(
        
                                ':name' => $certificateName,
                                ':certificatTitle' => $certificateTitle,
                                ':certificatDescription' => $certificateDescription,
                                ':id' => $certificateId
                                ));
        
       return $result;  
    }
    
    
   
    // Returns information on a certificat:
    public function getCertificate($certificateId) {
        
        $sql ='SELECT id, name, certificatImg, certificatTitle,  certificatDescription FROM certificates WHERE id = ?';
        
        $certificate = $this->executeRequest($sql, array($certificateId));
        
        if ($certificate->rowCount() > 0)
            return $certificate->fetch(); // Access to the first result line.
        else
            throw new Exception("Aucun certificat ne correspond à l'identifiant '$certificateId'");
    }
   
    /*************************************************************************/
    

    
}




