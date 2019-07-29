<?php

namespace MathieuMT\myPortfolio\Model;

use MathieuMT\myPortfolio\Model\Entities\Work;
use MathieuMT\myPortfolio\Model\Entities\Slide;
use MathieuMT\myPortfolio\Model\Model;

class AdminWorkDAO extends Model{
    
    /*********** PROJECT MANAGER *********/
   // Delete a image of certificate in the database:
    public function delImageBDD($id) {
       
        $sql = 'DELETE FROM works WHERE id = :id';
        
        $response = $this->executeRequest($sql, array(
                                'id' => $id
                                 ));
        return $response;  
    } 
    
    // Add new images in the database:
    public function insertImages($targetFile) {
        
        $sql="INSERT INTO works (workImg) VALUES ('$targetFile')";
        
        $result=$this->executeRequest($sql);
    }
    
    // Si le champ certificatImg existe déjà dans la table certificates:
    function existeWorkImg($targetFile) {   
   
        $sql = "SELECT *
                FROM works
                WHERE workImg = '$targetFile'";

        $res = $this->executeRequest($sql);
        $row = $res->fetch();

        return !empty($row);
    }
    
    /************* INFORMATIONS DE CHAQUE PROJET ***************/

     // Returns information on a work:
    public function getWork($workId) {
        
        $sql ='SELECT id, name, workImg, workTitle,  workDescription, workCategory, workLink FROM works WHERE id = ?';
        
        $work = $this->executeRequest($sql, array($workId));
        
        if ($work->rowCount() > 0)
            return new Work($work->fetch()); // Access to the first result line.
        else
            throw new Exception("Aucun projet ne correspond à l'identifiant '$workId'");
    }
   
    /*************************************************************************/
    

    /*********** SLIDE MANAGER *********/

    // Delete a image of slide in the database:
    public function delImageSlideBDD($id) {
       
        $sql = 'DELETE FROM slides WHERE id = :id';
        
        $response = $this->executeRequest($sql, array(
                                'id' => $id
                                 ));
        return $response;
    } 
    
    // Obtenir les slides en fonction de l'id de chaque projet réalié:
    public function getS($work_id) { // Obtenir la liste des données descriptives pour chaque "Slide" sous forme de tableau d'objets.
        
        $slides = [];
        
        $sql = "SELECT * FROM slides WHERE id = $work_id";
        
        $aboutSlide = $this->executeRequest($sql); // tableau des données concernant le diapositif
        foreach ($aboutSlide as $oneSlide) { // On parcours les tableaux des données pour chaque diapositif
            $slide = new Slide($oneSlide); // On instancie le diapositif (entité) et son tableau de données en objet (pour 1 diapositif)
            $slides[] = $slide; /* S'il y a plusieurs diapositifs ou s'il y a un seul diapositif , on les regroupe en objets dans un tableau de plusieurs diapositifs */
        }
        
        return $slides; // On renvoie un tableau de plusieurs objets 
    }

    /* Obtenir la description des champs de la bdd pour chaque slide  */
    public function getSlideDescription() { // Obtenir la liste des données descriptives pour chaque "Slide" sous forme de tableau d'objets.
        
        $slides = [];
        
        $sql = "SELECT s.id, s.name, s.slideImg, s.work_id FROM slides s LEFT JOIN works w ON s.work_id = w.id";
        
        $aboutSlide = $this->executeRequest($sql); // tableau des données concernant le travail
        foreach ($aboutSlide as $oneSlide) { // On parcours les tableaux des données pour chaque utilisateur
            $slide = new Slide($oneSlide); // On instancie l'utisateur (entité) et son tableau de données en objet (pour 1 travail)
            $slides[] = $slide; /* S'il y a plusieurs travaux ou s'il y a un seul travail , on les regroupe en objets dans un tableau de plusieurs travaux */
        }
        
        return $slides; // On renvoie un tableau de plusieurs objets 
    }
    

    // Add new images in the database:
    public function insertImagesSlides($targetFile, $work_id) {
        
        $sql="INSERT INTO slides (slideImg, work_id) VALUES ('$targetFile', ?)";
        
        $result=$this->executeRequest($sql,array($work_id));
        return $result;
 
    }
    
    // Si le champ certificatImg existe déjà dans la table certificates:
    function existeSlideImg($targetFile)
    {   

        $sql = "SELECT *
                FROM slides
                WHERE slideImg = '$targetFile'";

        $res = $this->executeRequest($sql);
        $row = $res->fetch();

        return !empty($row);
    }

    
    /************* FORMULAIRE DES INFORMATIONS DE CHAQUE DIAPOSITIF ***************/
    
    // Update slide in the database:
    public function sendSlideDetails($slideName, $slideId, $work_id) {
        
        $sql = 'UPDATE slides SET name = :name WHERE id = :id AND work_id = :work_id';
        
        $result = $this->executeRequest($sql, array(
        
                                ':name' => $slideName,
                                'work_id' => $work_id,
                                ':id' => $slideId
                                )); 
       return $result;  
    }

    // Returns information on a slide:
    public function getSlide($slideId) {
        
        $sql ='SELECT id, name, slideImg, work_id FROM slides WHERE id = ?';
        
        $slide = $this->executeRequest($sql, array($slideId));
        
        if ($slide->rowCount() > 0)
            return $slide->fetch(); // Access to the first result line.
        else
            throw new Exception("Aucun diapositif ne correspond à l'identifiant '$slideId'");
    }
    
    /*************************************************************************/
    
}




