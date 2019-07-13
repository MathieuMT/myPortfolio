<?php
require_once 'Models/Frontend/Slide.php';
require_once 'Models/Model.php';

class SlideManager extends Model{
    
    
    public function getSlideDescription() { // Obtenir la liste des données descriptives pour chaque "User" sous forme de tableau d'objets.
        
        $slides = [];
        
        $sql = "SELECT * FROM slides";
        
        /*
        $sql = "SELECT s.id, s.name, s.slideImg, s.work_id FROM slides s LEFT JOIN works w ON s.work_id = w.id";
        */
        $aboutSlide = $this->executeRequest($sql); // tableau des données concernant le travail
        foreach ($aboutSlide as $oneSlide) { // On parcours les tableaux des données pour chaque utilisateur
            $slide = new Slide($oneSlide); // On instancie l'utisateur (entité) et son tableau de données en objet (pour 1 travail)
            $slides[] = $slide; /* S'il y a plusieurs travaux ou s'il y a un seul travail , on les regroupe en objets dans un tableau de plusieurs travaux */
        }
        
        //var_dump($aboutWork);
        //var_dump($works);
        return $slides; // On renvoie un tableau de plusieurs objets 
    }
    
}



