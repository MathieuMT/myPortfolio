<?php

namespace MathieuMT\myPortfolio\Model;

use MathieuMT\myPortfolio\Model\Entities\Slide;
use MathieuMT\myPortfolio\Model\Model;

class SlideDAO extends Model{
    
    public function getSlideDescription() { // Obtenir la liste des données descriptives pour chaque "diapositif" sous forme de tableau d'objets.
        
        $slides = [];
        
        $sql = "SELECT * FROM slides";
        
        $aboutSlide = $this->executeRequest($sql); // tableau des données concernant le diapositif
        foreach ($aboutSlide as $oneSlide) { // On parcours les tableaux des données pour chaque diapositif
            $slide = new Slide($oneSlide); // On instancie le diapositif (entité) et son tableau de données en objet (pour 1 diapositif)
            $slides[] = $slide; /* S'il y a plusieurs diapositifs ou s'il y a un seul diapositif , on les regroupe en objets dans un tableau de plusieurs diapositifs */
        }
        return $slides; // On renvoie un tableau de plusieurs objets 
    }
    
}



