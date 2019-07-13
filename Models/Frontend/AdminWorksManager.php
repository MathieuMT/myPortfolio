<?php
require_once 'Models/Frontend/Slide.php';
require_once 'Models/Model.php';

class AdminWorksManager extends Model{
    

    /*********** PROJECT MANAGER *********/

   // Delete a image of certificate in the database:
    public function delImageBDD($id) {
       
        $sql = 'DELETE FROM works WHERE id = :id';
        
        $response = $this->executeRequest($sql, array(
                                'id' => $id
                                 ));

        return $response;
      
    } 
    
    
     public function getWorkDescription() { // Obtenir la liste des données descriptives pour chaque "User" sous forme de tableau d'objets.
        
        $works = [];
        $sql = "SELECT * FROM works";
        
        $aboutWork = $this->executeRequest($sql); // tableau des données concernant le travail
        foreach ($aboutWork as $oneWork) { // On parcours les tableaux des données pour chaque utilisateur
            $work = new Work($oneWork); // On instancie l'utisateur (entité) et son tableau de données en objet (pour 1 travail)
            $works[] = $work; /* S'il y a plusieurs travaux ou s'il y a un seul travail , on les regroupe en objets dans un tableau de plusieurs travaux */
        }
        
        //var_dump($aboutWork);
        //var_dump($works);
        return $works; // On renvoie un tableau de plusieurs objets 
    }
    

    // Add new images in the database:
    public function insertImages($targetFile) {
        
        $sql="INSERT INTO works (workImg) VALUES ('$targetFile')";
        
        $result=$this->executeRequest($sql);
 
    }
    
    // Si le champ certificatImg existe déjà dans la table certificates:
    function existeWorkImg($targetFile)
    {   
   
     
        $sql = "SELECT *
                FROM works
                WHERE workImg = '$targetFile'";

        $res = $this->executeRequest($sql);
        $row = $res->fetch();

        return !empty($row);
    }
    


    /************* FORMULAIRE DES INFORMATIONS DE CHAQUE PROJET ***************/
    
    
    // Update work in the database:
    public function sendWorkDetails($workName, $workTitle, $workDescription, $workCategory, $workLink, $workId) {
        
        $sql = 'UPDATE works SET name = :name,  workTitle = :workTitle, workDescription = :workDescription, workCategory = :workCategory, workLink = :workLink WHERE id = :id';
        
        $result = $this->executeRequest($sql, array(
        
                                ':name' => $workName,
                                ':workTitle' => $workTitle,
                                ':workDescription' => $workDescription,
                                ':workCategory' => $workCategory,
                                ':workLink' => $workLink,
                                ':id' => $workId
                                ));
        
       return $result;  
    }
    
    
   
    // Returns information on a work:
    public function getWork($workId) {
        
        $sql ='SELECT id, name, workImg, workTitle,  workDescription, workCategory, workLink FROM works WHERE id = ?';
        
        $work = $this->executeRequest($sql, array($workId));
        
        if ($work->rowCount() > 0)
            return $work->fetch(); // Access to the first result line.
        else
            throw new Exception("Aucun projet ne correspond à l'identifiant '$workId'");
    }
   
    /*************************************************************************/
    
    
    // Returns information on a slide:
    public function getSlide($slideId) {
        
        $sql ='SELECT s.id, s.name, s.slideImg, s.work_id FROM slides s LEFT JOIN works w ON s.work_id = w.id';
        
        $slide = $this->executeRequest($sql, array($slideId));
        
        if ($slide->rowCount() > 0)
            return $slide->fetch(); // Access to the first result line.
        else
            throw new Exception("Aucun diapositif ne correspond à l'identifiant '$slideId'");
    }
    
   
}




